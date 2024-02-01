<?php require APPROOT . '/views/inc/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel='stylesheet' href='<?php echo URLROOT; ?>/css/style.css'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
            }

            .row {
                display: flex;
                flex-wrap: wrap;
            }

            .column {
                flex: 1;
                height:350px;
                max-width: 50%; /* Set maximum width for each column */
                padding: 20px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .input-container {
                display: none;
                margin-top: 10px;
            }

            .button-container {
                display: flex;
                justify-content: space-around;
                margin-bottom: 20px;
            }

            .custom-btn {
                padding: 10px;
            }
        </style>
    </head>
    <body>

        <div class="button-container">
            <button class="custom-btn" onclick="showInput('url-input')">URL</button>
            <button class="custom-btn" onclick="showInput('text-input')">Text</button>
            <button class="custom-btn" onclick="showInput('email-input')">Email</button>
            <button class="custom-btn" onclick="showWhatsappInputs()">WhatsApp</button>
            <button class="custom-btn" onclick="showInput('facebook-input')">Facebook</button>
            <button class="custom-btn" onclick="showInput('twitter-input')">Twitter</button>
            <button class="custom-btn" onclick="showInput('instagram-input')">Instagram</button>
            <button class="custom-btn" onclick="showInput('linkedin-input')">LinkedIn</button>
            
            <button class="custom-btn" onclick="showInput('pdf-input')">Upload PDF</button>
        </div>

        <div class="row">
            <div class="column left-column" style="background-color:white;">
                

                <form method="post" action="<?php echo URLROOT; ?>pages/generator">
                    <input type="hidden" id="action" name="action" value="">
                    <div class="input-container" id="url-input">
                        <label for="url">URL</label>
                        <br>
                        <input type="text" id="url" name="url">
                        <br>
                    </div>

                    <div class="input-container" id="text-input">
                        <label for="text">Text</label>
                        <br>
                        <input type="text" id="text" name="text">
                        <br>
                    </div>
                    
                   <div class="input-container" id="pdf-input">
    <label for="pdfFile">Select PDF to upload:</label>
    <br>
    <input type="file" id="pdfFile" name="pdfFile">
    <br>
</div>


                    <div class="input-container" id="email-input">
                        <label for="to">To</label>
                        <br>
                        <input type="text" id="to" name="to">
                        <br>
                        <label for="subject">Subject</label>
                        <br>
                        <input type="text" id="subject" name="subject">
                        <br>
                        <label for="body">Body</label>
                        <br>
                        <textarea id="body" name="body"></textarea>
                        <br>
                    </div>

                    <div class="input-container" id="whatsapp-inputs">
                        <label for="whatsapp">WhatsApp Number</label>
                        <br>
                        <input type="text" id="whatsapp" name="whatsapp">
                        <br>
                        <label for="message">Message</label>
                        <br>
                        <textarea id="message" name="message"></textarea>
                        <br>
                    </div>

                    <div class="input-container" id="facebook-input">
                        <label for="facebook">Facebook URL</label>
                        <br>
                        <input type="text" id="facebook" name="facebook">
                    </div>

                    <div class="input-container" id="twitter-input">
                        <label for="twitter">Twitter Handle</label>
                        <br>
                        <input type="text" id="twitter" name="twitter">
                    </div>

                    <div class="input-container" id="instagram-input">
                        <label for="instagram">Instagram Username</label>
                        <br>
                        <input type="text" id="instagram" name="instagram">
                    </div>

                    <div class="input-container" id="linkedin-input">
                        <label for="linkedin">LinkedIn Profile URL</label>
                        <br>
                        <input type="text" id="linkedin" name="linkedin">
                        <br>
                    </div>
                    <br>
                    <button type="submit" class="btn" onclick="setAction()">Generate QR</button>
                </form>
            </div>

            <div class="column right-column" style="background-color:white; text-align: center;">
                <?php if (isset($data['qrCode'])) : ?>
                    <img class="qr_code" src="data:image/png;base64,<?= $data['qrCode'] ?>" alt="QR Code">
                    <br/>
                    <a class="border-0 p-2 fs-6 btn-primary btn btn-sm ps-3 pe-3" 
   href="data:image/png;base64,<?= $data['qrCode'] ?>" 
   download="qrcode.png" 
   data-nav-label-param="download_qr_code" 
   data-action="click->nav#gtagClick" 
   data-nav-type-param="button" 
   id="downloadBtnHeader">
  
   Download QR Code
</a>
    <?php endif; ?>

                <?php if (isset($data['error'])) : ?>
                    <p style="color: red;"><?php echo $data['error']; ?></p>
                <?php endif; ?>
            </div>

            <script>
                function setAction() {
                    var inputContainers = document.querySelectorAll('.input-container');
                    inputContainers.forEach(function (container) {
                        if (container.style.display === 'block') {
                            var action = container.id.split('-')[0];
                            document.getElementById('action').value = action; // Set the action to the id of the currently visible input field
                            localStorage.setItem('lastAction', action); // Store the last action in local storage
                        }
                    });
                }

                window.onload = function () {
                    hideAllInputs();
                    var lastAction = localStorage.getItem('lastAction') || 'url'; // Get the last action from local storage or default to 'url'
                    showInput(lastAction + '-input'); // Show the input for the last action
                };

                function hideAllInputs() {
                    var inputContainers = document.querySelectorAll('.input-container');
                    inputContainers.forEach(function (container) {
                        container.style.display = 'none';
                    });
                }

                function showInput(inputId) {
                    hideAllInputs();
                    var inputContainer = document.getElementById(inputId);
                    inputContainer.style.display = 'block';
                }

                function showWhatsappInputs() {
                    hideAllInputs();
                    var whatsappInputs = document.getElementById('whatsapp-inputs');
                    whatsappInputs.style.display = 'block';
                }

                // Initially, hide all inputs except the default one
                /* window.onload = function () {
                 hideAllInputs();
                 showInput('url-input'); // Show the default input
                 };*/
            </script>

    </body>
</html>
<?php require APPROOT . '/views/inc/footer.php'; ?>
