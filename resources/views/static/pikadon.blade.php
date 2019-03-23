<!DOCTYPE html>
<html>
<head>
  <title>פיקדון 2020</title>
  <meta charset="utf-8">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.1/css/bulma.min.css">
  <link rel="stylesheet" href="pikadon/style.css">

  <link rel="apple-touch-icon" sizes="57x57" href="pikadon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="pikadon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="pikadon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="pikadon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="pikadon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="pikadon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="pikadon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="pikadon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="pikadon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="pikadon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="pikadon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="pikadon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="pikadon/favicon-16x16.png">
  <link rel="manifest" href="pikadon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
</head>
<body>

<div class="container">
  <section class="hero is-primary">
    <div class="hero-body">
      <div class="container">
        <h1 class="title">
          פיקדון 2020
        </h1>
        <h2 class="subtitle">
          צובי, יש׳ך שנקל?
        </h2>
      </div>
    </div>
  </section>

  <section class="section" id="app">
    <div class="columns">
      <div class="column is-4 is-offset-4">
        <p class="content">
          כדי לבדוק האם אתם זכאים לשנקל מצובי דהוב, לפי <a href="https://twitter.com/raavtan/status/905029906572214272" target="twitter">חוק שנקל למפברט</a>, יש להזין את ה־@כינוי שלך בטוויטר לתיבה שכאן, והתשובה תופיע מייד
        </p>

        <div class="field">
          <label class="label">@כינוי בטוויטר</label>
          <p class="control has-icons-left has-icons-right">
            <input class="input" type="nickname" placeholder="@כינוי בטוויטר" v-model="nickname">
            <span class="icon is-small is-right">
              <i class="fa fa-twitter"></i>
            </span>
          </p>
        </div>
        <div class="field is-grouped">
          <div class="control">
            <button class="button is-primary" @click="check">בדיקה</button>
          </div>
        </div>


        <div v-cloak class="notification is-success" v-if="show_success">
          <button class="delete"></button>
          ברכות, על פי רישומינו <strong>יש לך</strong> זכאות לשנקל מצובי דהוב
        </div>


        <div v-cloak class="notification is-danger" v-if="show_danger">
          <button class="delete"></button>
          צר לי, על פי רישומינו <strong>אין לך</strong> זכאות לשנקל מצובי דהוב
        </div>
      </div>
    </div>
  </section>
</div>

<script src="https://unpkg.com/vue"></script>
<script src="pikadon/script.js"></script>

</body>
</html>
