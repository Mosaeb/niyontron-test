const steps = document.querySelectorAll(".section");
let currentStep = 0;

function showStep(stepIndex) {
    steps.forEach((step, index) => {
        if (index === stepIndex) {
            step.style.display = "block";
        } else {
            step.style.display = "none";
        }
    });
}

document.getElementById("nextStep").addEventListener("click", () => {
    currentStep++;
    if (currentStep >= steps.length) {
        currentStep = steps.length - 1; // Prevent exceeding the last step
    }
    showStep(currentStep);
});

document.getElementById("prevStep").addEventListener("click", () => {
    currentStep--;
    if (currentStep < 0) {
        currentStep = 0; // Prevent going before the first step
    }
    showStep(currentStep);
});

showStep(currentStep);


document.addEventListener("DOMContentLoaded", function() {
        const form = document.getElementById("multiStepForm");
        const progressBar = document.getElementById("progressBar");
        const prevBtn = document.getElementById("prevStep");
        const nextBtn = document.getElementById("nextStep");
        let currentStep = 0;
        const steps = document.querySelectorAll(".section");

        // Initial progress bar width
        updateProgressBar();

        nextBtn.addEventListener("click", function() {
            if (currentStep < steps.length - 1) {
                currentStep++;
                updateProgressBar();
                showStep();
                highlightStepLabel();
            }
        });

        prevBtn.addEventListener("click", function() {
            if (currentStep > 0) {
                currentStep--;
                updateProgressBar();
                showStep();
                highlightStepLabel();
            }
        });

        function updateProgressBar() {
            const percent = (currentStep / (steps.length - 1)) * 100;
            progressBar.style.width = percent + "%";
        }

        function showStep() {
            steps.forEach((step, index) => {
                if (index === currentStep) {
                    step.style.display = "block";
                } else {
                    step.style.display = "none";
                }
            });
        }

        function highlightStepLabel() {
            const stepLabels = document.querySelectorAll('.step-label');
            stepLabels.forEach((label, index) => {
                if (index === currentStep) {
                    label.classList.add("step-highlighted");
                } else {
                    label.classList.remove("step-highlighted");
                }
            });
        }
    });
