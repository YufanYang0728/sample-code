$(document).ready(function() {
    // Check if the user has already seen the popup or has not given consent

    // if (!localStorage.getItem('popupShown') || !localStorage.getItem('consentGiven')) {
        // Display the pop-up
        var popupContent = `
            <div id="popup-overlay">
                <div id="popup-content">
                    <p>Thank you for embarking on your insurance exploration with us. We wish to inform you that the information provided in the subsequent questionnaires will be stored in our Advice Cyborg database. Please know that your personal information will be handled with the utmost care. <br><br>We prioritize the security and privacy of your data, employing robust measures to ensure its safe storage and confidentiality. Your data will solely be used for tailored insurance recommendations and won't be shared without your explicit consent. We appreciate your trust in us and look forward to assisting you in your financial journey.</p>
                    <label><input type="checkbox" id="consentCheckbox"> I consent to having my information stored by Advice Cyborg</label>
                    <div id="button-container">
                        <button id="returnButton" class="btn btn-secondary">Return to Previous Page</button>
                        <button id="continueButton" class="btn btn-primary" style="background-color: #0D8ABF;" disabled>Continue</button>
                    </div>
                </div>
            </div>
        `;

        // Append the pop-up overlay to the body
        $('body').append(popupContent);

        // Enable the Continue button when the checkbox is checked
        $('#consentCheckbox').on('change', function() {
            $('#continueButton').prop('disabled', !this.checked);
        });

        // Show the pop-up overlay
        $('#popup-overlay').fadeIn();

        // Add a click event handler to the "Continue" button
        $('#continueButton').on('click', function() {
            // Hide the pop-up overlay
            $('#popup-overlay').fadeOut();
            // Store the user's consent
            localStorage.setItem('consentGiven', true);
            // You can add additional logic here to proceed to the next page
        });

        // Add a click event handler to the "Return" button
        $('#returnButton').on('click', function() {
            // Hide the pop-up overlay
            $('#popup-overlay').fadeOut();
            // Navigate back to the previous page
            history.back();
        });

        // Store a flag in local storage to prevent showing the popup again
        localStorage.setItem('popupShown', true);
    // }
});
