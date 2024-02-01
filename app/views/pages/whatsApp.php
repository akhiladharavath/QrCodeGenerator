<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo URLROOT; ?>pages/whatsApp">
  Phone number: <input type="text" name="number"><br>
 <textarea name="message" placeholder="Text Message" maxlength="5000" rows="3" class="pe-5 pe-md-2 position-relative form-control"></textarea>
 <label>Text Message</label>
  <input type="submit">
</form>

     <div class="flex-item qr">
                    <?php if (isset($data['qrCode'])): ?>
                        <h2>Your QR Code:</h2>
                        <img class="qr_code" src="data:image/png;base64,<?= $qrCodeImage ?>"  alt="QR Code">
                    <?php endif; ?>
                </div>
</body>
</html>

