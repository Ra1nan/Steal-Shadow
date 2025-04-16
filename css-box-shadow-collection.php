<!doctype html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

  <title>Free CSS Modern Box Shadow Collection with Live Preview - Steal Shadow</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="canonical" href=" " />


  <meta name="description"
    content="Free Beautiful CSS Modern box-shadow presets and instantly copy them. Browse modern shadows with live previews and get CSS ready shadows for your UI project. " />



  <link rel="apple-touch-icon" sizes="180x180" href="img/fav.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/fav.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/fav.png">
  <link rel="manifest" href="site.webmanifest">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

  <style>
    body {
      background: #fff;
      font-family: "Oswald", sans-serif;
      -webkit-font-smoothing: antialiased;
      text-align: center;
      padding-top: 7em;
       
    }

    body>p {
      padding-left: 1em;
      padding-right: 1em;
    }

    a {
      color: #000;
    }

    ul#main-ul {
      display: flex;
      flex-wrap: wrap;
      padding: 1em 0;
      width: 100%;
      max-width: 1280px;
      margin: 0 auto;
      justify-content: space-around;
    }

    #main-ul li {
      border-radius: 6px;
      padding: 1em;
      margin: 2em;
      flex: 0 0 17.3vw;
      height: 17.3vw;
      display: block;
      background: #fff;
      transition: all 300ms;
      color: #555;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      overflow: hidden;
    }

    #main-ul li:not(.copied):hover {
      cursor: pointer;
      /* box-shadow: none !important; */
    }

    #main-ul li:not(.copied):hover :not(.credits) {
      text-decoration: underline;
    }

    #main-ul li.copied {
      cursor: pointer;
    }

    #main-ul li .credits {
      font-size: .7em;
      opacity: .85;
      display: block;
      padding-top: 1em;
    }

    header.active a.producthunt {
      display: none;
    }

    a.a-button {
      background-color: transparent;
      color: #000000;
      cursor: pointer;
      display: inline-block;
      line-height: 32px;
      padding: 0 8px;
      text-decoration: none;
      user-select: none;
      border-radius: 6px;
      transition: all 150ms;
      margin-left: 5px;
      margin-right: 5px;
    }

    a.a-button:hover {
      transform: scale(1.1);
      box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px, rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }

    a.a-button .logo-img {
      margin-left: 2px;
      margin-right: 3px;
      width: 20px;
      height: auto;
      vertical-align: sub;
    }


    a.get-cssscan {
      text-decoration: none;
      background-color: #2cbc63;
      border-radius: 6px;
      display: inline-block !important;
      padding: 9px 22px;
      text-align: center;
      transition: all 200ms;
    }

    a.get-cssscan span {
      display: none;
    }

    a.get-cssscan svg {
      vertical-align: sub;
    }

    a.get-cssscan:hover {
      background-color: #30d46f;
      box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px, #1a9047 0px 0px 0px 2px;
    }

    @media all and (min-width: 375px) {
      #main-ul li {
        flex: 0 0 22vw;
        height: 22vw;
      }

      a.get-cssscan span {
        display: inline;
      }
    }


    @media all and (min-width: 768px) {
      ul#main-ul {
        padding: 1em 0;
      }

      #main-ul li {
        margin: 2.7em;
        padding: 1em;
        flex: 0 0 110px;
        height: 110px;
      }

      header.active a.producthunt {
        display: initial;
      }

      header.active a.producthunt img {
        display: block;
      }
    }

    @media all and (min-width: 1024px) {
      #main-ul li {
        margin: 3.5em;
        flex: 0 0 150px;
        height: 150px;
      }
    }




    header {
      display: flex;
      position: fixed;
      top: 50px;
      left: 0;
      padding: 0 9%;
      align-items: center;
      box-sizing: border-box;
    }

    header.active {
      top: 0;
      left: 0;
      width: 100%;
      background: #fff;
      transition: all 250ms;
      z-index: 9;
      padding: 0 6%;
      box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
    }

    header.active .logo-wrapper img {
      width: 30px;
      height: 30px;
    }

    header.active a {
      display: initial;
    }

    header.active .button {
      display: inline-flex;
      height: 40px;
      font-size: 14px;
      padding: 0 25px;
      margin-right: 10px;
    }

    header.active a:last-child .button {
      margin-right: 0;
    }

    header a {
      display: none;
    }

    .logo-wrapper {
      display: flex;
      align-items: center;
    }

    .logo-wrapper img {
      width: 60px;
      height: 60px;
      margin-right: 1em;
    }


    header .buttons-wrapper {
      margin-left: auto;
      display: flex;
      align-items: center;
    }

    a.no-underline {
      text-decoration: none;
    }

    .btn-x {
      text-decoration: none !important;
      padding: 5px 8px;
      background: #2fc95d;
      color: #fff;
      font-size: 10px;
      border: none;
      border-radius: 5px;
    }

    .btn-x:hover {
      background: #28b452;
      /* A slightly darker green */
      color: #fff;
      cursor: pointer;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
      transition: background 0.3s, box-shadow 0.3s;
    }

    .lg-x {
      width: 200px;
      margin-top: 8px;
      margin-bottom: 5px;
    }
  </style>


</head>

<body>

  <header class="active">

    <a href="index" class="no-underline"  >
      <div class=" ">
        <img src="img/Steal-Shadow.png" class="lg-x" alt="Steal-Shadow">

      </div>
    </a>


    <div class="buttons-wrapper">

    </div>

  </header>



  <h1>Free CSS Modern Box Shadow Collection</h1>
  <p>
    Free CSS Modern Box Shadow Collection features a curated set of clean, elegant, and customizable <br> CSS box shadow
    styles that you can instantly copy and use in your web projects.
  </p>
  <p class="shortcuts-disclaimer">🎯 Press <span class="shortcut">Ctrl+D</span> to bookmark this page</p>


  <script>
    function copyBoxShadow(element) {
      const boxShadow = element.style.boxShadow;
      navigator.clipboard.writeText(`box-shadow: ${boxShadow};`).then(() => {
        alert("Box shadow copied: " + boxShadow);
      }).catch(err => {
        alert("Failed to copy: " + err);
      });
    }
  </script>

  <ul id="main-ul">


    <ul id="main-ul">





      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 0px 0px 2px inset;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
        <button class="btn-x ">Steal Shadow 😎</button>

      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="    box-shadow: rgba(0, 0, 0, 0.16) 0px 5px 10px, rgb(232 232 232) 0px 0px 0px 1px;"> <button
          class="btn-x ">Steal Shadow 😎</button></li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(0, 0, 0, 0.25) 0px 2px 100px -10px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>


      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>


      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;"> <button
          class="btn-x ">Steal Shadow 😎</button>
      </li>


      <li onclick="copyBoxShadow(this)"
        style="    box-shadow: rgba(50, 50, 93, 0.25) 0px 0px 2px 2px, rgba(0, 0, 0, 0.3) 10px 10px 8px -25px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>


      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;"> <button
          class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;"> <button
          class="btn-x ">Steal Shadow 😎</button>

      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;"> <button
          class="btn-x ">Steal Shadow 😎</button>

      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;"> <button
          class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(0, 0, 0, 0.05) -1px -2px 20px 20px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;"> <button
          class="btn-x ">Steal Shadow 😎</button>
      </li>


      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(0, 0, 0, 0.06) 0px 2px 4px 0px inset;"> <button
          class="btn-x ">Steal Shadow 😎</button>
      </li>


      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px 0px, rgba(0, 0, 0, 0.1) 0px 0px 1px 0px;"> <button
          class="btn-x ">Steal Shadow 😎</button>
      </li>


      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(0, 0, 0, 0.2) 0px 18px 50px -10px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 50px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(0, 0, 0, 0.04) 0px 3px 5px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>



      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 1px, rgba(0, 0, 0, 0.07) 0px 2px 2px, rgba(0, 0, 0, 0.07) 0px 4px 4px, rgba(0, 0, 0, 0.07) 0px 8px 8px, rgba(0, 0, 0, 0.07) 0px 16px 16px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(27, 31, 35, 0.04) 0px 1px 0px, rgba(255, 255, 255, 0.25) 0px 1px 0px inset;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(190, 220, 255, 0.3) 0px 0px 0px 3px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>


      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(33, 35, 38, 0.1) 0px 10px 10px -10px;"> <button
          class="btn-x ">Steal Shadow 😎</button>
      </li>


      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgb(204, 219, 232) -3px -3px 6px 1px , rgba(255, 237, 237, 0.5) -3px -3px 6px 1px inset;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 1px 0px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(17, 17, 26, 0.05) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 0px 8px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(17, 17, 26, 0.05) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(17, 17, 26, 0.1) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 48px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(50, 50, 105, 0.15) 0px 2px 5px 0px, rgba(0, 0, 0, 0.05) 0px 1px 1px 0px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(0, 0, 0, 0.15) 0px 15px 25px, rgba(0, 0, 0, 0.05) 0px 5px 10px;"> <button
          class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px 0px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 12px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(0, 0, 0, 0.1) -4px 9px 25px -6px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 90px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(0, 0, 0, 0.2) 0px 20px 30px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>
      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(255, 255, 255, 0.2) 0px 0px 0px 1px inset, rgba(0, 0, 0, 0.9) 0px 0px 0px 1px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>
      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(0, 0, 0, 0.25) 0px 0.0625em 0.0625em, rgba(0, 0, 0, 0.25) 0px 0.125em 0.5em, rgba(255, 255, 255, 0.1) 0px 0px 0px 1px inset;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(0, 0, 0, 0.09) 0px 3px 12px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)" style="box-shadow: rgba(59, 59, 59, 0.17) 0px 5px 0px 0px, rgba(46, 46, 46, 0.15) 10px -11px 27px 0px, rgba(66, 66, 66, 0.1) 0px -79px 40px 0px inset, rgba(57, 57, 57, 0.06) 0px 2px 1px, rgba(57, 57, 57, 0.09) 0px 4px 2px, rgba(58, 58, 58, 0.09) 0px 8px 4px, rgba(62, 62, 62, 0.09) 0px 16px 8px, rgba(69, 69, 69, 0.09) 0px 32px 16px;
    border-radius: 15px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(33, 33, 33, 0.45) 1px 1px 10px -2px; border-radius: 20px;"> <button class="btn-x ">Steal
          Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(0, 0, 0, 0.2) 0px 2px 2px, rgba(0, 0, 0, 0.2) 0px 10px 10px -5px, rgba(0, 0, 0, 0.2) 0px -2px 0px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px, rgb(209, 213, 219) 0px 0px 0px 1px inset;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>



      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(9, 30, 66, 0.25) 0px 1px 1px, rgba(9, 30, 66, 0.13) 0px 0px 1px 1px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>

      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(14, 63, 126, 0.04) 0px 0px 0px 1px, rgba(42, 51, 69, 0.04) 0px 1px 1px -0.5px, rgba(42, 51, 70, 0.04) 0px 3px 3px -1.5px, rgba(42, 51, 70, 0.04) 0px 6px 6px -3px, rgba(14, 63, 126, 0.04) 0px 12px 12px -6px, rgba(14, 63, 126, 0.04) 0px 24px 24px -12px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>
      <li onclick="copyBoxShadow(this)"
        style="box-shadow: rgba(14, 63, 126, 0.06) 0px 0px 0px 1px, rgba(42, 51, 70, 0.03) 0px 1px 1px -0.5px, rgba(42, 51, 70, 0.04) 0px 2px 2px -1px, rgba(42, 51, 70, 0.04) 0px 3px 3px -1.5px, rgba(42, 51, 70, 0.03) 0px 5px 5px -2.5px, rgba(42, 51, 70, 0.03) 0px 10px 10px -5px, rgba(42, 51, 70, 0.03) 0px 24px 24px -8px;">
        <button class="btn-x ">Steal Shadow 😎</button>
      </li>
    </ul>


  </ul>

  <footer>
    <section>
      <div class="">

        <div class="">
          <img src="img/Steal-Shadow.png" class="lg-x" alt="Steal Shadow ">
          <p class="mb-0"> <svg style="    position: absolute;
    left: 33%;
    margin-top: 5px;" width="24" height="24" viewBox="0 0 64 64" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="32" cy="32" r="30" stroke="#28a745" stroke-width="4" />
                    <path d="M32 12A20 20 0 1 0 52 32H42A10 10 0 1 1 22 32H12A20 20 0 0 0 32 12Z" fill="#28a745" />
                </svg>
                Open Source</span>
                - Collected & Curated From Devs 💻❤️ | Want To Contribute <a href="" class="git-a"> <svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-github" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 
                    0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 
                    1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 
                    0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82a7.6 7.6 0 0 1 2-.27c.68 0 1.36.09 
                    2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 
                    0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 
                    0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg></a></p>
        </div>
        
      </div>
    </section>
  </footer>


  <style>
    .t-center {
      text-align: center;
    }

    .ft-txt {
      text-decoration: none;
    }
  </style>





  <!-- Notyf CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
  <!-- Notyf JS -->
  <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>

  <script>
    const notyf = new Notyf({
      duration: 2500,
      ripple: true,
      position: { x: 'right', y: 'bottom' }
    });

    function copyBoxShadow(element) {
      const boxShadow = element.style.boxShadow;
      if (boxShadow) {
        navigator.clipboard.writeText(`box-shadow: ${boxShadow};`).then(() => {
          notyf.success('Box shadow copied!');
        });
      } else {
        notyf.error('No box-shadow to copy.');
      }
    }
  </script>


</body>