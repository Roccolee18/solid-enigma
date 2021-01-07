<html>

<?php
  $form_submitted=false;
  if(isset($_POST["cough"])){
    $form_submitted=true;
  }
?>

<head>
  <title>Questionnaire</title>
  <link href="style.css" type="text/css" rel="stylesheet">
  <meta name="viewport" content="width=device-wcdth, initial-scale=1.0">
  <meta charset="UTF-8">
  <meta property="og:url" content="https://questionnaire.github.io">
</head>

<body>

  <?php
  if($form_submitted);
  ?>
    <h3>Thank you for compleating the screening questionnaire!</h3>

  <?php
  else:
  ?>
  
  <div class="banner">

    <div class="logo">
      <svg width="239" height="295" viewBox="0 0 239 295" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <rect x="35.9785" y="74.0139" width="203.021" height="209.473" fill="url(#pattern0)" />
        <path d="M155.397 12.851L153.15 35.5487L172.318 44.8855L151.761 49.5766L149.514 72.2743L139.056 52.4759L118.499 57.167L132.593 40.2398L122.135 20.4414L141.303 29.7782L155.397 12.851Z" fill="#DB2726" />
        <path d="M155.397 12.851L153.15 35.5487L172.318 44.8855L151.761 49.5766L149.514 72.2743L139.056 52.4759L118.499 57.167L132.593 40.2398L122.135 20.4414L141.303 29.7782L155.397 12.851Z" fill="#DB2726" />
        <path d="M155.397 12.851L153.15 35.5487L172.318 44.8855L151.761 49.5766L149.514 72.2743L139.056 52.4759L118.499 57.167L132.593 40.2398L122.135 20.4414L141.303 29.7782L155.397 12.851Z" fill="#DB2726" />
        <path d="M155.397 12.851L153.15 35.5487L172.318 44.8855L151.761 49.5766L149.514 72.2743L139.056 52.4759L118.499 57.167L132.593 40.2398L122.135 20.4414L141.303 29.7782L155.397 12.851Z" fill="#DB2726" />
        <path d="M89.3734 28.8848L87.126 51.5825L106.294 60.9193L85.7371 65.6104L83.4898 88.308L73.0322 68.5096L52.4752 73.2007L66.569 56.2736L56.1114 36.4752L75.2795 45.812L89.3734 28.8848Z" fill="#DB2726" />
        <path d="M89.3734 28.8848L87.126 51.5825L106.294 60.9193L85.7371 65.6104L83.4898 88.308L73.0322 68.5096L52.4752 73.2007L66.569 56.2736L56.1114 36.4752L75.2795 45.812L89.3734 28.8848Z" fill="#DB2726" />
        <path d="M89.3734 28.8848L87.126 51.5825L106.294 60.9193L85.7371 65.6104L83.4898 88.308L73.0322 68.5096L52.4752 73.2007L66.569 56.2736L56.1114 36.4752L75.2795 45.812L89.3734 28.8848Z" fill="#DB2726" />
        <path d="M89.3734 28.8848L87.126 51.5825L106.294 60.9193L85.7371 65.6104L83.4898 88.308L73.0322 68.5096L52.4752 73.2007L66.569 56.2736L56.1114 36.4752L75.2795 45.812L89.3734 28.8848Z" fill="#DB2726" />
        <path d="M50.0318 86.8649L47.7844 109.563L66.9525 118.899L46.3955 123.591L44.1482 146.288L33.6906 126.49L13.1336 131.181L27.2274 114.254L16.7698 94.4553L35.9379 103.792L50.0318 86.8649Z" fill="#DB2726" />
        <path d="M50.0318 86.8649L47.7844 109.563L66.9525 118.899L46.3955 123.591L44.1482 146.288L33.6906 126.49L13.1336 131.181L27.2274 114.254L16.7698 94.4553L35.9379 103.792L50.0318 86.8649Z" fill="#DB2726" />
        <path d="M50.0318 86.8649L47.7844 109.563L66.9525 118.899L46.3955 123.591L44.1482 146.288L33.6906 126.49L13.1336 131.181L27.2274 114.254L16.7698 94.4553L35.9379 103.792L50.0318 86.8649Z" fill="#DB2726" />
        <path d="M50.0318 86.8649L47.7844 109.563L66.9525 118.899L46.3955 123.591L44.1482 146.288L33.6906 126.49L13.1336 131.181L27.2274 114.254L16.7698 94.4553L35.9379 103.792L50.0318 86.8649Z" fill="#DB2726" />
        <path d="M51.3167 159.482L49.0694 182.18L68.2375 191.517L47.6805 196.208L45.4331 218.906L34.9755 199.107L14.4185 203.798L28.5124 186.871L18.0548 167.073L37.2229 176.41L51.3167 159.482Z" fill="#DB2726" />
        <path d="M51.3167 159.482L49.0694 182.18L68.2375 191.517L47.6805 196.208L45.4331 218.906L34.9755 199.107L14.4185 203.798L28.5124 186.871L18.0548 167.073L37.2229 176.41L51.3167 159.482Z" fill="#DB2726" />
        <path d="M51.3167 159.482L49.0694 182.18L68.2375 191.517L47.6805 196.208L45.4331 218.906L34.9755 199.107L14.4185 203.798L28.5124 186.871L18.0548 167.073L37.2229 176.41L51.3167 159.482Z" fill="#DB2726" />
        <path d="M51.3167 159.482L49.0694 182.18L68.2375 191.517L47.6805 196.208L45.4331 218.906L34.9755 199.107L14.4185 203.798L28.5124 186.871L18.0548 167.073L37.2229 176.41L51.3167 159.482Z" fill="#DB2726" />
        <path d="M78.5544 224.497L76.3071 247.194L95.4752 256.531L74.9182 261.222L72.6708 283.92L62.2132 264.121L41.6562 268.813L55.7501 251.885L45.2925 232.087L64.4605 241.424L78.5544 224.497Z" fill="#DB2726" />
        <path d="M78.5544 224.497L76.3071 247.194L95.4752 256.531L74.9182 261.222L72.6708 283.92L62.2132 264.121L41.6562 268.813L55.7501 251.885L45.2925 232.087L64.4605 241.424L78.5544 224.497Z" fill="#DB2726" />
        <path d="M78.5544 224.497L76.3071 247.194L95.4752 256.531L74.9182 261.222L72.6708 283.92L62.2132 264.121L41.6562 268.813L55.7501 251.885L45.2925 232.087L64.4605 241.424L78.5544 224.497Z" fill="#DB2726" />
        <path d="M78.5544 224.497L76.3071 247.194L95.4752 256.531L74.9182 261.222L72.6708 283.92L62.2132 264.121L41.6562 268.813L55.7501 251.885L45.2925 232.087L64.4605 241.424L78.5544 224.497Z" fill="#DB2726" />
        <defs>
          <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
            <use xlink:href="#image0" transform="translate(-0.0158894) scale(0.00201519)" />
          </pattern>
          <image id="image0" width="512" height="512"
            xlink:href="data:image/png;base64,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" />
        </defs>
      </svg>

    </div>

    <div class="title">
      <h1>COVID-19 Screening Questionnaire</h1>
      <h2>Please answer the following questions</h2>
    </div>

  </div>
  <p>Do you have any of the following?</p>
  <form action="index.php" class="form" method="post">
    <span>A new or worsening cough</span>
    <input type="radio" id="yesCough" name="cough" value="yes" required>
    <label for="yesCough">Yes</label>
    <input type="radio" id="noCough" name="cough" value="no">
    <label for="noCough">No</label>

    <span>Shortness of breath</span>
    <input type="radio" id="yesBreath" name="breath" value="yes" required>
    <label for="yesBreath">Yes</label>
    <input type="radio" id="noBreath" name="breath" value="no">
    <label for="noBreath">No</label>

    <span>A sore throat</span>
    <input type="radio" id="yesThroat" name="throat" value="yes" required>
    <label for="yeaThroat">Yes</label>
    <input type="radio" id="noThroat" name="throat" value="no">
    <label for="noThroat">No</label>

    <span>Runny nose</span>
    <input type="radio" id="yesNose" name="nose" value="yes" required>
    <label for="yesNose">Yes</label>
    <input type="radio" id="noNose" name="nose" value="no">
    <label for="noNose">No</label>

    <span>Hoarse voice</span>
    <input type="radio" id="yesvoice" name="voice" value="yes" required>
    <label for="yseVoice">Yes</label>
    <input type="radio" id="noVoice" name="voice" value="no">
    <label for="noVoice">No</label>

    <span>Difficulty swallowing</span>
    <input type="radio" id="yesSwallow" name="swallow" value="yes" required>
    <label for="yesSwallow">Yes</label>
    <input type="radio" id="noSwallow" name="swallow" value="no">
    <label for="noSwallow">No</label>

    <span>New smell or taste disorder</span>
    <input type="radio" id="yesTaste" name="taste" value="yes" required>
    <label for="yesTaste">Yes</label>
    <input type="radio" id="noTaste" name="taste" value="no">
    <label for="noTaste">No</label>

    <span>Nausea/vomitting</span>
    <input type="radio" id="yesNausea" name="nausea" value="yes" required>
    <label for="yesNausea">Yes</label>
    <input type="radio" id="noNausea" name="nausea" value="no">
    <label for="noNausea">No</label>

    <span>Unexplained fatigue</span>
    <input type="radio" id="yesFatigue" name="fatigue" value="yes" required>
    <label for="yesFatigue">Yes</label>
    <input type="radio" id="noFatigue" name="fatigue" value="no">
    <label for="noFatigue">No</label>

    <span>Chills</span>
    <input type="radio" id="yesChils" name="chills" value="yes" required>
    <label for="yesChils">Yes</label>
    <input type="radio" id="noChills" name="chills" value="no">
    <label for="noChills">No</label>

    <span>Headache</span>
    <input type="radio" id="yesHeadache" name="headache" value="yes" required>
    <label for="cough">Yes</label>
    <input type="radio" id="noHeadache" name="headache" value="no">
    <label for="noHeadache">No</label>

    <span>A new or worsening cough</span>
    <input type="radio" id="yes" name="cough" value="yes" required>
    <label for="cough">Yes</label>
    <input type="radio" id="no" name="cough" value="no">
    <label for="cough">No</label>

    <span>Have you travelled outside of or have been in close contact with anyone who has travelled outisde of Canada in the past 14 days?</span>
    <input type="radio" id="yesTravel" name="travel" value="yes" required>
    <label for="yesTravel">Yes</label>
    <input type="radio" id="noTravel" name="travel" value="no">
    <label for="noTravel">No</label>

    <span>Fever</span>
    <input type="radio" id="yesFever" name="fever" value="yes" required>
    <label for="yesFever">Yes</label>
    <input type="radio" id="noFever" name="fever" value="no">
    <label for="noFever">No</label>

    <span>Have you been in close contact with anyone who has a confirmed or probably case of COVID-19?</span>
    <input type="radio" id="yesContact" name="contact" value="yes" required>
    <label for="yesContact">Yes</label>
    <input type="radio" id="noContact" name="contact" value="no">
    <label for="noContact">No</label>

    <input type="submit" value="Submit">

  </form>
  <?php endif; ?>
</body>

</html>
