<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

  <title>Free Modern Radio Box Collection with Live Preview - Steal Shadow</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="canonical" href=" " />


  <meta name="description"
    content="Free Beautiful Modern Radio Box presets and instantly copy them. Browse modern Radio Box with live previews and get  ready Radio Box for your UI project. " />

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

    ul.radios-wrapper {
      display: flex;
      flex-wrap: wrap;
      padding: 4em 0;
      width: 100%;
      max-width: 1280px;
      margin: 0 auto;
      justify-content: space-around;
    }

    .radios-wrapper li {
      border-radius: 6px;
      margin: 1em;
      flex: 0 0 calc(100vw - 2em - 1em);
      height: calc(15vh + 2.5em);
      display: block;
      transition: all 300ms;
      color: #555;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      position: relative;
      box-shadow: rgba(9, 30, 66, 0.25) 0px 1px 1px, rgba(9, 30, 66, 0.13) 0px 0px 1px 1px;
    }

    .radios-wrapper li:hover {
      cursor: pointer;
      box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
    }



    .radios-wrapper li .credits {
      font-size: .7em;
      opacity: .85;
      display: block;
      padding-top: 2em;
    }

    .radios-wrapper li.forDarkMode {
      background: radial-gradient(300% 300% at 50% 50%, rgba(0, 0, 0, .9) 0, transparent 100%);
      color: #fff;
      border: 1px solid rgba(0, 0, 0, .5);
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






    @media all and (min-width: 375px) {


      .radios-wrapper li {
        flex: 0 0 calc(48vw - 2em - 1em);
      }
    }


    @media all and (min-width: 768px) {
      ul.radios-wrapper {
        padding: 4em 0;
        justify-content: space-between;
      }

      .radios-wrapper li {
        margin: 2.5em;
        flex: 0 0 calc(32vw - (2.7em * 2));
        height: 160px;
      }

      header.active a.producthunt {
        display: initial;
      }

      header.active a.producthunt img {
        display: block;
      }
    }

    @media all and (min-width: 1024px) {
      ul.radios-wrapper {
        justify-content: space-around;
      }

      .radios-wrapper li {
        padding: 1em 30px;
        margin: 1em;
        flex: 0 0 200px;
        height: 150px;
      }
    }





    .gradient-text {
      background-image: linear-gradient(#FFFFFF 30%, #2D82A4 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-size: 250%;
      transition: 500ms background-position;
    }


    header {
      display: flex;
      position: fixed;
      top: 50px;
      left: 0;
      padding: 0 9%;
      align-items: center;
      box-sizing: border-box;
      z-index: 999;
    }

    header.active {
      top: 0;
      left: 0;
      width: 100%;
      background: #fff;
      transition: all 250ms;
      z-index: 999;
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



    .svg-inline--fa {
      display: inline-block;
      font-size: inherit;
      height: 1em;
      overflow: visible;
      vertical-align: -.125em;
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

  <h1>Free Modern Radio Box Collection</h1>
  <p>
    Free Modern Radio Box Collection features a curated set of clean, elegant, and customizable <br> Radio Box
    styles that you can instantly copy and use in your web projects.
  </p>
  <p class="shortcuts-disclaimer">🎯 Press <span class="shortcut">Ctrl+D</span> to bookmark this page</p>



  <ul class="radios-wrapper">



    <li onclick="copyRadio(event, this)">
      <div class="radio-wrapper-1">

        <input id="example-1" type="radio" name="radio-examples">
        <label for="example-1">Radio </label>

      </div>
      <style>
        .radio-wrapper-1 {
          color: #212529;
          font-family: "Oswald", sans-serif;
          font-weight: 400;
          line-height: 1.5;
        }

        .radio-wrapper-1 label {
          display: inline-block;
          padding-left: .25em;
        }

        .radio-wrapper-1 input[type=radio] {
          font-family: inherit;
          font-size: inherit;
          line-height: inherit;
          margin-bottom: 0;
          margin-right: 0;
        }

        .radio-wrapper-1 input[type=radio] {
          background-position: center center;
          -webkit-print-color-adjust: exact;
          appearance: none;
          background-color: #fff;
          background-repeat: no-repeat;
          background-size: contain;
          border: 1px solid rgba(0, 0, 0, .25);
          height: 1em;
          margin-top: .25em;
          vertical-align: top;
          width: 1em;
          border-radius: 50%;
        }

        .radio-wrapper-1 input[type=radio]:active {
          filter: brightness(90%);
        }

        .radio-wrapper-1 input[type=radio]:focus {
          border-color: #86b7fe;
          box-shadow: rgba(13, 110, 253, .25) 0 0 0 .25rem;
          outline: 0;
        }

        .radio-wrapper-1 input[type=radio]:checked {
          background-color: #0d6efd;
          border-color: #0d6efd;
        }

        .radio-wrapper-1 input[type=radio]:checked {
          background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e");
        }

        .radio-wrapper-1 input[type=radio]:disabled {
          filter: none;
          opacity: .5;
          pointer-events: none;
        }

        .radio-wrapper-1 input[type=radio]:disabled~label {
          opacity: .5;
        }
      </style>

    </li>


    <li onclick="copyRadio(event, this)">
      <div class="radio-wrapper-2">

        <input id="example-2" type="radio" name="radio-examples">
        <label for="example-2">Radio </label>

      </div>
      <style>
        .radio-wrapper-2 {
          display: flex;
          align-items: center;
        }

        .radio-wrapper-2 input[type=radio] {
          appearance: none;
          background-origin: border-box;
          border-width: 1px;
          border-style: solid;
          display: inline-block;
          flex-shrink: 0;
          padding: 0;
          -webkit-print-color-adjust: exact;
          border-radius: 100%;
          user-select: none;
          vertical-align: middle;
          height: 1rem;
          width: 1rem;
          border-color: rgb(209 213 219);
          background-color: rgb(243 244 246/1);
          color: rgb(28 100 242/1);
          margin: 0;
        }

        .radio-wrapper-2 input[type=radio]:focus {
          outline: 2px solid transparent;
          outline-offset: 2px;
          box-shadow: rgb(255, 255, 255) 0px 0px 0px 2px, rgb(63, 131, 248) 0px 0px 0px 4px;
        }

        .radio-wrapper-2 input[type=radio]:checked {
          background-color: currentcolor;
          background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg viewBox='0 0 16 16' fill='%23fff' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='8' cy='8' r='3'/%3E%3C/svg%3E");
          background-position: 50% center;
          background-repeat: no-repeat;
          background-size: initial;
          border-color: transparent;
        }

        .radio-wrapper-2 input[type=radio]:disabled~label {
          color: rgb(156 163 175)
        }

        .radio-wrapper-2 label {
          padding-inline-start: .5rem;
          font-size: .875rem;
          line-height: 1.25rem;
          font-weight: 500;
          color: rgb(17 24 39/1);
        }
      </style>

    </li>


    <li onclick="copyRadio(event, this)">
      <div class="radio-wrapper-3">

        <label for="example-3">
          <input id="example-3" type="radio" name="radio-examples">
          <span class="circle"></span>
          <span>Radio </span>
        </label>

      </div>
      <style>
        .radio-wrapper-3 {
          user-select: none;
        }

        .radio-wrapper-3 label {
          display: inline-flex;
          align-items: center;
        }

        .radio-wrapper-3 .circle {
          position: relative;
          display: inline-block;
          width: 18px;
          height: 18px;
          border-radius: 10px;
          background-color: #fff;
          background-image: linear-gradient(#fff, #FBFBFB);
          box-shadow: #D1D5DB 0 0 0 1px inset, rgba(0, 0, 0, 0.05) 0 1px 2px 0;
          box-shadow: #e2e3e3 0 0 0 1px inset, rgb(0 0 0 / 10%) 0 1px 2px 0;
          transition: all 0.15s ease;
        }

        .radio-wrapper-3 .circle:after {
          content: "";
          position: absolute;
          display: block;
          top: 6px;
          left: 6px;
          width: 6px;
          height: 6px;
          border-radius: 50%;
          background: #fff;
          opacity: 0;
          transform: scale(0);
        }

        .radio-wrapper-3 .circle+span {
          margin-left: .6em;
        }

        .radio-wrapper-3 input[type="radio"] {
          position: absolute;
          opacity: 0;
          display: none;
          appearance: none;
          -moz-appearance: none;
          -webkit-appearance: none;
        }

        .radio-wrapper-3 input[type="radio"]:checked+.circle {
          background-color: #4177EE;
          background-image: linear-gradient(#4177EE, #2F6AEB);
          box-shadow: rgb(0 0 0 / 10%) 0 1px 2px 1px, #2E69EB 0px 0px 0px 1px, rgba(255, 255, 255, 0.15) 0 1px 1px inset;
        }

        .radio-wrapper-3 input[type="radio"]:checked+.circle:after {
          opacity: 1;
          transform: scale(1);
          transition: all 0.15s ease;
          box-shadow: #2E69EB 0px 0px 0px 1px;
        }
      </style>

    </li>

    <li onclick="copyRadio(event, this)">
      <div class="radio-wrapper-4">

        <input id="example-4" type="radio" name="radio-examples">
        <label for="example-4">Radio </label>

      </div>
      <style>
        .radio-wrapper-4 {
          user-select: none;
          display: inline-flex;
          align-items: center;
        }

        .radio-wrapper-4 label {
          padding-left: .6em;
          color: #414552;
          font-weight: 500;
          line-height: 20px;
          font-size: 14px;
        }

        .radio-wrapper-4 label:hover,
        .radio-wrapper-4 input[type="radio"]:hover~label {
          color: #14134e;
        }

        .radio-wrapper-4 input[type="radio"] {
          appearance: none;
          -moz-appearance: none;
          -webkit-appearance: none;
          position: relative;
          display: inline-block;
          width: 14px;
          height: 14px;
          border-radius: 10px;
          background-color: #fff;
          box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.12) 0px 1px 1px 0px, rgba(64, 68, 82, 0.16) 0px 0px 0px 1px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(64, 68, 82, 0.08) 0px 2px 5px 0px;
          transition: all 240ms ease;
          margin: 0;
          vertical-align: middle;
        }

        .radio-wrapper-4 input[type="radio"]:after {
          content: "";
          position: absolute;
          display: block;
          top: 50%;
          left: 50%;
          width: 6px;
          height: 6px;
          border-radius: 50%;
          background: #fff;
          opacity: 0;
          transform: translate(-50%, -50%) scale(1.25);
          transition: all 240ms ease-in-out;
        }

        .radio-wrapper-4 input[type="radio"]:checked {
          background-color: rgb(99, 91, 255);
          box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.12) 0px 1px 1px 0px, rgb(99, 91, 255) 0px 0px 0px 1px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(64, 68, 82, 0.08) 0px 2px 5px 0px;
        }

        .radio-wrapper-4 input[type="radio"]:checked:focus {
          box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(1, 150, 237, 0.36) 0px 0px 0px 4px, rgba(0, 0, 0, 0.12) 0px 1px 1px 0px, rgb(99, 91, 255) 0px 0px 0px 1px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(64, 68, 82, 0.08) 0px 2px 5px 0px;
        }

        .radio-wrapper-4 input[type="radio"]:checked:after {
          opacity: 1;
          transform: translate(-50%, -50%) scale(1);
          box-shadow: #2E69EB 0px 0px 0px 1px;
        }
      </style>

    </li>


    <li onclick="copyRadio(event, this)">
      <div class="radio-wrapper-5">

        <label for="example-5" class="forCircle">
          <input id="example-5" type="radio" name="radio-examples">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16" fill="currentColor">
              <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
            </svg>
          </span>
        </label>
        <label for="example-5">
          Radio
        </label>

      </div>
      <style>
        .radio-wrapper-5 {
          line-height: 1.5;
          display: flex;
          align-items: center;
        }

        .radio-wrapper-5 label.forCircle {
          align-items: center;
          border: 0 solid #eee;
          border-radius: 9999px;
          box-sizing: border-box;
          cursor: pointer;
          display: flex;
          padding: .75rem;
          position: relative;
          scrollbar-width: thin !important;
        }

        .radio-wrapper-5 input[type=radio] {
          appearance: none;
          border: 1px solid #b0bec5;
          border-radius: 9999px;
          box-sizing: border-box;
          color: rgb(33 33 33/1);
          cursor: pointer;
          font-family: inherit;
          font-feature-settings: inherit;
          font-size: 100%;
          font-variation-settings: inherit;
          font-weight: inherit;
          height: 1.25rem;
          line-height: inherit;
          margin: 0;
          padding: 0;
          position: relative;
          scrollbar-width: thin !important;
          transition: all .15s cubic-bezier(.4, 0, .2, 1);
          width: 1.25rem;
        }

        .radio-wrapper-5 input[type=radio]:before {
          background-color: rgb(96 125 139/1);
          border: 0 solid #eee;
          border-radius: 9999px;
          box-sizing: border-box;
          content: '';
          display: block;
          height: 3rem;
          left: 50%;
          opacity: 0;
          position: absolute;
          top: 50%;
          transform: translate(-50%, -50%);
          transition: opacity .15s cubic-bezier(.4, 0, .2, 1);
          width: 3rem;
        }

        .radio-wrapper-5 input[type=radio]:placeholder {
          color: #bdbdbd;
          opacity: 1;
        }

        .radio-wrapper-5 input[type=radio]:checked:before {
          background-color: rgb(33 33 33/1);
        }

        .radio-wrapper-5 input[type=radio]:hover:not(:disabled):before {
          opacity: .1;
        }

        .radio-wrapper-5 label.forCircle span {
          border: 0 solid #eee;
          box-sizing: border-box;
          color: rgb(33 33 33/1);
          left: 50%;
          opacity: 0;
          pointer-events: none;
          position: absolute;
          scrollbar-width: thin !important;
          top: 50%;
          transform: matrix(1, 0, 0, 1, -7, -7);
          transition: opacity .15s cubic-bezier(.4, 0, .2, 1);
        }

        .radio-wrapper-5 input[type=radio]:checked~span {
          opacity: 1;
        }

        .radio-wrapper-5 svg {
          display: block;
          height: .875rem;
          vertical-align: middle;
          width: .875rem;
        }

        .radio-wrapper-5 label {
          color: rgb(97 97 97/1);
          cursor: pointer;
          font-weight: 300;
          margin-top: 1px;
          user-select: none;
        }
      </style>

    </li>

    <li onclick="copyRadio(event, this)">
      <div class="radio-wrapper-6">

        <input id="example-6" type="radio" name="radio-examples">
        <label for="example-6">Radio </label>

      </div>
      <style>
        .radio-wrapper-6 {
          display: flex;
          align-items: center;
        }

        @supports (-webkit-appearance: none) or (-moz-appearance: none) {
          .radio-wrapper-6 input[type=radio] {
            --active: #275EFE;
            --active-inner: #fff;
            --focus: 2px rgba(39, 94, 254, .3);
            --border: #BBC1E1;
            --border-hover: #275EFE;
            --background: #fff;
            --disabled: #F6F8FF;
            --disabled-inner: #E1E6F9;
            -webkit-appearance: none;
            -moz-appearance: none;
            height: 21px;
            outline: none;
            display: inline-block;
            vertical-align: top;
            position: relative;
            margin: 0;
            cursor: pointer;
            border: 1px solid var(--bc, var(--border));
            background: var(--b, var(--background));
            transition: background 0.3s, border-color 0.3s, box-shadow 0.2s;
          }

          .radio-wrapper-6 input[type=radio]:after {
            content: "";
            display: block;
            left: 0;
            top: 0;
            position: absolute;
            transition: transform var(--d-t, 0.3s) var(--d-t-e, ease), opacity var(--d-o, 0.2s);
          }

          .radio-wrapper-6 input[type=radio]:checked {
            --b: var(--active);
            --bc: var(--active);
            --d-o: .3s;
            --d-t: .6s;
            --d-t-e: cubic-bezier(.2, .85, .32, 1.2);
          }

          .radio-wrapper-6 input[type=radio]:disabled {
            --b: var(--disabled);
            cursor: not-allowed;
            opacity: 0.9;
          }

          .radio-wrapper-6 input[type=radio]:disabled:checked {
            --b: var(--disabled-inner);
            --bc: var(--border);
          }

          .radio-wrapper-6 input[type=radio]:disabled+label {
            cursor: not-allowed;
            color: #8A91B4;
          }

          .radio-wrapper-6 input[type=radio]:hover:not(:checked):not(:disabled) {
            --bc: var(--border-hover);
          }

          .radio-wrapper-6 input[type=radio]:focus {
            box-shadow: 0 0 0 var(--focus);
          }

          .radio-wrapper-6 input[type=radio]:not(.switch) {
            width: 21px;
          }

          .radio-wrapper-6 input[type=radio]:not(.switch):after {
            opacity: var(--o, 0);
          }

          .radio-wrapper-6 input[type=radio]:not(.switch):checked {
            --o: 1;
          }

          .radio-wrapper-6 input[type=radio]+label {
            font-size: 14px;
            line-height: 21px;
            display: inline-block;
            vertical-align: top;
            cursor: pointer;
            margin-left: .5em;
          }

          .radio-wrapper-6 input[type=radio] {
            border-radius: 50%;
          }

          .radio-wrapper-6 input[type=radio]:after {
            width: 19px;
            height: 19px;
            border-radius: 50%;
            background: var(--active-inner);
            opacity: 0;
            transform: scale(var(--s, 0.7));
          }

          .radio-wrapper-6 input[type=radio]:checked {
            --s: .5;
          }
        }
      </style>

    </li>


    <li onclick="copyRadio(event, this)">
      <div class="radio-wrapper-7">

        <label class="radio-wrapper-7" for="example-7">
          <input id="example-7" type="radio" name="radio-examples">
          <span>Radio </span>
        </label>

      </div>
      <style>
        label.radio-wrapper-7 {
          padding: 6px;
          border-radius: 50px;
          display: inline-flex;
          cursor: pointer;
          transition: background 0.2s ease;
          -webkit-tap-highlight-color: transparent;
        }

        label.radio-wrapper-7:hover,
        label.radio-wrapper-7:focus-within {
          background: rgba(159, 159, 159, 0.1);
        }

        label.radio-wrapper-7 input {
          vertical-align: middle;
          width: 20px;
          height: 20px;
          border-radius: 10px;
          background: none;
          border: 0;
          box-shadow: inset 0 0 0 1px #9F9F9F;
          box-shadow: inset 0 0 0 1.5px #9F9F9F;
          appearance: none;
          padding: 0;
          margin: 0;
          transition: box-shadow 150ms cubic-bezier(0.95, 0.15, 0.5, 1.25);
          pointer-events: none;
        }

        label.radio-wrapper-7 input:focus {
          outline: none;
        }

        label.radio-wrapper-7 input:checked {
          box-shadow: inset 0 0 0 6px #6743ee;
        }

        label.radio-wrapper-7 span {
          vertical-align: middle;
          display: inline-block;
          line-height: 20px;
          padding: 0 8px;
        }
      </style>

    </li>


    <li onclick="copyRadio(event, this)">
      <div class="radio-wrapper-8">

        <label class="radio-wrapper-8" for="example-8">
          <input id="example-8" type="radio" name="radio-examples">
          <span>Radio </span>
        </label>

      </div>
      <style>
        label.radio-wrapper-8 {
          display: block;
          cursor: pointer;
        }

        label.radio-wrapper-8 input {
          display: none;
          appearance: none;
          -moz-appearance: none;
          -webkit-appearance: none;
        }

        label.radio-wrapper-8 input+span {
          line-height: 22px;
          height: 22px;
          padding-left: 22px;
          display: block;
          position: relative;
        }

        label.radio-wrapper-8 input+span:not(:empty) {
          padding-left: 30px;
        }

        label.radio-wrapper-8 input+span:before,
        label.radio-wrapper-8 input+span:after {
          content: "";
          width: 22px;
          height: 22px;
          display: block;
          border-radius: 50%;
          left: 0;
          top: 0;
          position: absolute;
        }

        label.radio-wrapper-8 input+span:before {
          background: #D1D7E3;
          transition: background 0.2s ease, transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 2);
        }

        label.radio-wrapper-8 input+span:after {
          background: #fff;
          transform: scale(0.78);
          transition: transform 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.4);
        }

        label.radio-wrapper-8 input:checked+span:before {
          transform: scale(1.04);
          background: #5D9BFB;
        }

        label.radio-wrapper-8 input:checked+span:after {
          transform: scale(0.4);
          transition: transform 0.3s ease;
        }

        label.radio-wrapper-8:hover input+span:before {
          transform: scale(0.92);
        }

        label.radio-wrapper-8:hover input+span:after {
          transform: scale(0.74);
        }

        label.radio-wrapper-8:hover input:checked+span:after {
          transform: scale(0.4);
        }
      </style>

    </li>



    <li onclick="copyRadio(event, this)">
      <div class="radio-wrapper-9">

        <input id="example-9" type="radio" name="radio-examples">
        <label for="example-9">Radio </label>

      </div>
      <style>
        .radio-wrapper-9 input[type=radio] {
          display: none;
          appearance: none;
        }

        .radio-wrapper-9 input[type=radio]+label:before {
          content: "";
          background: #f4f4f4;
          border-radius: 100%;
          border: 1px solid #b4b4b4;
          display: inline-block;
          width: 1.4em;
          height: 1.4em;
          position: relative;
          top: -0.1em;
          margin-right: .6em;
          vertical-align: middle;
          cursor: pointer;
          text-align: center;
          transition: all 250ms ease;
        }

        .radio-wrapper-9 input[type=radio]:checked+label:before {
          background-color: #3197EE;
          box-shadow: inset 0 0 0 4px #f4f4f4;
        }

        .radio-wrapper-9 input[type=radio]:focus+label:before {
          outline: none;
          border-color: #3197EE;
        }

        .radio-wrapper-9 input[type=radio]:disabled+label:before {
          box-shadow: inset 0 0 0 4px #f4f4f4;
          border-color: #b4b4b4;
          background: #b4b4b4;
        }

        .radio-wrapper-9 input[type=radio]+label:empty:before {
          margin-right: 0;
        }
      </style>

    </li>

    <li onclick="copyRadio(event, this)">
      <div class="radio-wrapper-11">

        <label class="radio-wrapper-11" for="example-11">
          <input id="example-11" type="radio" name="radio-examples">
          <span class="design"></span>
          <span class="text">Radio </span>
        </label>

      </div>
      <style>
        label.radio-wrapper-11 {
          display: flex;
          justify-content: flex-start;
          align-items: center;
          flex-wrap: nowrap;

          margin: 12px 0;

          cursor: pointer;
          position: relative;

          --primary: hsl(250, 100%, 44%);
          --other: hsl(0, 0%, 14%);
        }

        label.radio-wrapper-11 input[type="radio"] {
          opacity: 0;
          position: absolute;
          left: 50%;
          top: 50%;
          transform: translate(-50%, -50%);
          z-index: -1;
        }

        label.radio-wrapper-11 .design {
          width: 16px;
          height: 16px;

          border: 1px solid var(--other);
          border-radius: 100%;
          margin-right: .9em;

          position: relative;
        }

        label.radio-wrapper-11 .design::before,
        label.radio-wrapper-11 .design::after {
          content: "";
          display: block;

          width: inherit;
          height: inherit;

          border-radius: inherit;

          position: absolute;
          transform: scale(0);
          transform-origin: center center;
        }

        label.radio-wrapper-11 .design:before {
          background: var(--other);
          opacity: 0;
          transition: .3s;
        }

        label.radio-wrapper-11 .design::after {
          background: var(--primary);
          opacity: .4;
          transition: .6s;
        }

        label.radio-wrapper-11 .text {
          color: var(--other);
          font-weight: bold;
        }

        label.radio-wrapper-11 input:checked+.design::before {
          opacity: 1;
          transform: scale(.6);
        }

        label.radio-wrapper-11 input:hover+.design,
        label.radio-wrapper-11 input:focus+.design {
          border: 1px solid var(--primary);
        }

        label.radio-wrapper-11 input:hover+.design:before,
        label.radio-wrapper-11 input:focus+.design:before {
          background: var(--primary);
        }

        label.radio-wrapper-11 input:hover~.text {
          color: var(--primary);
        }

        label.radio-wrapper-11 input:focus+.design::after,
        label.radio-wrapper-11 input:active+.design::after {
          opacity: .1;
          transform: scale(2.6);
        }
      </style>

    </li>


    <li onclick="copyRadio(event, this)">
      <div class="radio-wrapper-12">

        <label for="example-12">
          <input id="example-12" type="radio" name="radio-examples">
          <span class="text">Radio </span>
        </label>

      </div>
      <style>
        .radio-wrapper-12 {
          display: flex;
          flex-direction: column;
          gap: 10px;
          z-index: 3;
        }

        .radio-wrapper-12 * {
          box-sizing: border-box;
          padding: 0;
          margin: 0;
        }

        .radio-wrapper-12 label {
          display: flex;
          align-items: center;
          gap: 15px;
          padding: 0px 20px;
          width: 150px;
          cursor: pointer;
          height: 50px;
          position: relative;
        }

        .radio-wrapper-12 label::before {
          position: absolute;
          content: "";
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          width: 150px;
          height: 45px;
          z-index: -1;
          transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
          border-radius: 10px;
          border: 2px solid transparent;
        }

        .radio-wrapper-12 label:hover::before {
          transition: all 0.2s ease;
          background-color: #F5F6FA;
        }

        .radio-wrapper-12 label:has(input:checked)::before {
          background-color: #E1E9FF;
          border-color: #435dd8;
          height: 50px;
        }

        .radio-wrapper-12 label .text {
          color: #333;
        }

        .radio-wrapper-12 label input[type="radio"] {
          background-color: #D9D9E5;
          appearance: none;
          width: 17px;
          height: 17px;
          border-radius: 50%;
          display: flex;
          justify-content: center;
          align-items: center;
          outline: 0;
        }

        .radio-wrapper-12 label input[type="radio"]:checked {
          background-color: #435dd8;
          -webkit-animation: pulse-12 0.7s forwards;
          animation: pulse-12 0.7s forwards;
        }

        .radio-wrapper-12 label input[type="radio"]:before {
          content: "";
          width: 6px;
          height: 6px;
          border-radius: 50%;
          transition: all 0.1s cubic-bezier(0.165, 0.84, 0.44, 1);
          background-color: #fff;
          transform: scale(0);
        }

        .radio-wrapper-12 label input[type="radio"]:checked::before {
          transform: scale(1);
        }

        @keyframes pulse-12 {
          0% {
            box-shadow: 0 0 0 0 rgba(0, 0, 255, 0.4);
          }

          70% {
            box-shadow: 0 0 0 8px rgba(0, 0, 255, 0);
          }

          100% {
            box-shadow: 0 0 0 0 rgba(0, 0, 255, 0);
          }
        }
      </style>

    </li>


    <li onclick="copyRadio(event, this)">
      <div class="radio-wrapper-16">

        <input id="example-16" type="radio" name="radio-examples">
        <label for="example-16">Box </label>

      </div>
      <style>
        .radio-wrapper-16 label {
          background: #fff;
          padding: 6px 12px;
          border-radius: 8px;
          cursor: pointer;
          transition: all 0.2s ease;
          -webkit-tap-highlight-color: transparent;
          box-shadow: #EDEDED 0 0 0 1px inset, rgba(0, 0, 0, 0.05) 0 1px 2px 0;
          display: inline-block;
        }

        .radio-wrapper-16 label:hover {
          background: rgba(0, 0, 0, 0.03);
          box-shadow: #CFCFCF 0 0 0 1px inset, rgba(0, 0, 0, 0.1) 0 1px 2px;
        }

        .radio-wrapper-16 input {
          appearance: none;
          display: none;
        }

        .radio-wrapper-16 input:focus {
          outline: none;
        }

        .radio-wrapper-16 input:checked~label {
          box-shadow: #0B88FF 0 0 0 2px inset, rgba(0, 0, 0, 0.1) 0 1px 2px 1px;
        }
      </style>

    </li>


    <li onclick="copyRadio(event, this)">
      <div class="radio-wrapper-17">

        <input id="rating-17-5" type="radio" name="radio-examples">
        <label class="rating-5" for="rating-17-5"></label>
        <input id="rating-17-4" type="radio" name="radio-examples">
        <label class="rating-4" for="rating-17-4"></label>
        <input id="rating-17-3" type="radio" name="radio-examples">
        <label class="rating-3" for="rating-17-3"></label>
        <input id="rating-17-2" type="radio" name="radio-examples">
        <label class="rating-2" for="rating-17-2"></label>
        <input id="rating-17-1" type="radio" name="radio-examples">
        <label class="rating-1" for="rating-17-1"></label>

      </div>
      <style>
        .radio-wrapper-17 {
          display: flex;
          flex-direction: row-reverse;
        }

        .radio-wrapper-17 input[type="radio"] {
          display: none;
          appearance: none;
        }

        .radio-wrapper-17>label {
          cursor: pointer;
          width: 30px;
          height: 30px;
          margin-top: auto;
          background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23e3e3e3' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
          background-repeat: no-repeat;
          background-position: center;
          background-size: 76%;
          transition: .3s;
          display: inline-block;
        }

        .radio-wrapper-17>input:checked~label,
        .radio-wrapper-17>input:checked~label~label {
          background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23fcd93a' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
        }

        .radio-wrapper-17>input:not(:checked)~label:hover,
        .radio-wrapper-17>input:not(:checked)~label:hover~label {
          background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23d8b11e' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
        }
      </style>

    </li>


    <li onclick="copyRadio(event, this)">
      <div class="radio-wrapper-18">

        <input id="rating-18-5" type="radio" name="radio-examples">
        <label for="rating-18-5" title="text">
          <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
            </path>
          </svg>
        </label>
        <input id="rating-18-4" type="radio" name="radio-examples">
        <label for="rating-18-4" title="text">
          <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
            </path>
          </svg>
        </label>
        <input id="rating-18-3" type="radio" name="radio-examples">
        <label for="rating-18-3" title="text">
          <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
            </path>
          </svg>
        </label>
        <input id="rating-18-2" type="radio" name="radio-examples">
        <label for="rating-18-2" title="text">
          <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
            </path>
          </svg>
        </label>
        <input id="rating-18-1" type="radio" name="radio-examples">
        <label for="rating-18-1" title="text">
          <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
            </path>
          </svg>
        </label>

      </div>
      <style>
        .radio-wrapper-18>input {
          position: absolute;
          appearance: none;
        }

        .radio-wrapper-18>label {
          float: right;
          cursor: pointer;
          font-size: 30px;
          fill: #666;
        }

        .radio-wrapper-18>label>svg {
          fill: #666;
          /* Set default color for SVG */
          transition: fill 0.3s ease;
          /* Add a transition effect */
        }

        .radio-wrapper-18>input:checked+label:hover,
        .radio-wrapper-18>input:checked+label:hover~label,
        .radio-wrapper-18>input:checked~label:hover,
        .radio-wrapper-18>input:checked~label:hover~label,
        .radio-wrapper-18>label:hover~input:checked~label {
          fill: #e58e09;
        }

        .radio-wrapper-18>label:hover,
        .radio-wrapper-18>label:hover~label {
          fill: #ff9e0b;
        }

        .radio-wrapper-18>input:checked~label>svg {
          fill: #ffa723;
          /* Set color for selected stars */
        }
      </style>

    </li>

    <li onclick="copyRadio(event, this)">
      <div class="radio-wrapper-20">

        <label for="example-20-1">
          <input id="example-20-1" type="radio" name="radio-examples">
          <span class="name">Box 1</span>
        </label>
        <label for="example-20-2">
          <input id="example-20-2" type="radio" name="radio-examples">
          <span class="name">Box 2</span>
        </label>

      </div>
      <style>
        .radio-wrapper-20 input[type="radio"]:focus {
          outline: 0;
          border-color: #2260ff;
          box-shadow: 0 0 0 4px #b5c9fc;
        }

        .radio-wrapper-20 {
          display: flex;
          flex-wrap: wrap;
          margin-top: 0.5rem;
          justify-content: center;
        }

        .radio-wrapper-20 input[type="radio"] {
          clip: rect(0 0 0 0);
          clip-path: inset(100%);
          height: 1px;
          overflow: hidden;
          position: absolute;
          white-space: nowrap;
          width: 1px;
        }

        .radio-wrapper-20 input[type="radio"]:checked+span {
          box-shadow: 0 0 0 0.0625em #0043ed;
          background-color: #dee7ff;
          z-index: 1;
          color: #0043ed;
        }

        .radio-wrapper-20 label span {
          display: block;
          cursor: pointer;
          background-color: #fff;
          padding: 0.375em .75em;
          position: relative;
          margin-left: .0625em;
          box-shadow: 0 0 0 0.0625em #b5bfd9;
          letter-spacing: .05em;
          color: #3e4963;
          text-align: center;
          transition: background-color .5s ease;
        }

        .radio-wrapper-20 label:first-child span {
          border-radius: .375em 0 0 .375em;
        }

        .radio-wrapper-20 label:last-child span {
          border-radius: 0 .375em .375em 0;
        }
      </style>

    </li>

    <li onclick="copyRadio(event, this)">
      <div class="radio-wrapper-21">

        <input id="example-21" type="radio" name="radio-examples">
        <label for="example-21">
          <span class="title">Option </span>
          <small><span class="description">Description</span></small>
        </label>

      </div>
      <style>
        .radio-wrapper-21 label {
          background: #fff;
          padding: 8px 25px;
          border: none;
          border-radius: 6px;
          cursor: pointer;
          display: inline-block;
          box-sizing: border-box;
          text-align: left;
          box-shadow: 0 0 0 1px #d8dee4;
          transition: all 0.2s ease;
        }

        .radio-wrapper-21 label:hover {
          background: #f5f6f8;
        }

        .radio-wrapper-21 input {
          clip: rect(0, 0, 0, 0);
          border-width: 0;
          height: 1px;
          margin: -1px;
          overflow: hidden;
          padding: 0;
          position: absolute;
          white-space: nowrap;
          width: 1px;
        }

        .radio-wrapper-21 input:checked~label {
          box-shadow: 0 0 0 1.5px #675dff;
          color: #533afd;
        }

        .radio-wrapper-21 input:focus~label {
          box-shadow: 0 0 0 1.5px #675dff, 0 0 0 4px rgba(1, 150, 237, .36);
        }

        .radio-wrapper-21 input~label .title {
          font-weight: 600;
          margin-bottom: .5em;
        }

        .radio-wrapper-21 input~label .title,
        .radio-wrapper-21 input~label .description {
          display: block;
          font-size: 12px;
        }

        .radio-wrapper-21 input~label .description {
          color: #596171;
        }
      </style>

    </li>

    <li onclick="copyRadio(event, this)">
      <div class="radio-wrapper-22">

        <label class="radio-wrapper" for="example-22">
          <input type="radio" class="radio-input" name="radio-examples" id="example-22">
          <span class="radio-tile">
            <span class="radio-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                <path
                  d="M392.8 1.2c-17-4.9-34.7 5-39.6 22l-128 448c-4.9 17 5 34.7 22 39.6s34.7-5 39.6-22l128-448c4.9-17-5-34.7-22-39.6zm80.6 120.1c-12.5 12.5-12.5 32.8 0 45.3L562.7 256l-89.4 89.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l112-112c12.5-12.5 12.5-32.8 0-45.3l-112-112c-12.5-12.5-32.8-12.5-45.3 0zm-306.7 0c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3l112 112c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256l89.4-89.4c12.5-12.5 12.5-32.8 0-45.3z" />
              </svg>
            </span>
            <span class="radio-label">Code</span>
          </span>
        </label>

      </div>
      <style>
        .radio-wrapper-22 *,
        .radio-wrapper-22 *:after,
        .radio-wrapper-22 *:before {
          box-sizing: border-box;
        }

        .radio-wrapper-22 .radio-input {
          clip: rect(0 0 0 0);
          -webkit-clip-path: inset(100%);
          clip-path: inset(100%);
          height: 1px;
          overflow: hidden;
          position: absolute;
          white-space: nowrap;
          width: 1px;
        }

        .radio-wrapper-22 .radio-input:checked+.radio-tile {
          border-color: #2260ff;
          box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
          color: #2260ff;
        }

        .radio-wrapper-22 .radio-input:checked+.radio-tile:before {
          transform: scale(1);
          opacity: 1;
          background-color: #2260ff;
          border-color: #2260ff;
        }

        .radio-wrapper-22 .radio-input:checked+.radio-tile .radio-icon,
        .radio-wrapper-22 .radio-input:checked+.radio-tile .radio-label {
          color: #2260ff;
        }

        .radio-wrapper-22 .radio-input:focus+.radio-tile {
          border-color: #2260ff;
          box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1), 0 0 0 4px #b5c9fc;
        }

        .radio-wrapper-22 .radio-input:focus+.radio-tile:before {
          transform: scale(1);
          opacity: 1;
        }

        .radio-wrapper-22 .radio-tile {
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          width: 7rem;
          min-height: 7rem;
          border-radius: 0.5rem;
          border: 2px solid #b5bfd9;
          background-color: #fff;
          box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
          transition: 0.15s ease;
          cursor: pointer;
          position: relative;
        }

        .radio-wrapper-22 .radio-tile:before {
          content: "";
          position: absolute;
          display: block;
          width: 1.25rem;
          height: 1.25rem;
          border: 2px solid #b5bfd9;
          background-color: #fff;
          border-radius: 50%;
          top: 0.25rem;
          left: 0.25rem;
          opacity: 0;
          transform: scale(0);
          transition: 0.25s ease;
          background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='192' height='192' fill='%23FFFFFF' viewBox='0 0 256 256'%3E%3Crect width='256' height='256' fill='none'%3E%3C/rect%3E%3Cpolyline points='216 72.005 104 184 48 128.005' fill='none' stroke='%23FFFFFF' stroke-linecap='round' stroke-linejoin='round' stroke-width='32'%3E%3C/polyline%3E%3C/svg%3E");
          background-size: 12px;
          background-repeat: no-repeat;
          background-position: 50% 50%;
        }

        .radio-wrapper-22 .radio-tile:hover {
          border-color: #2260ff;
        }

        .radio-wrapper-22 .radio-tile:hover:before {
          transform: scale(1);
          opacity: 1;
        }

        .radio-wrapper-22 .radio-icon {
          transition: 0.375s ease;
          color: #494949;
        }

        .radio-wrapper-22 .radio-icon svg {
          width: 3rem;
          height: 3rem;
        }

        .radio-wrapper-22 .radio-label {
          color: #707070;
          transition: 0.375s ease;
          text-align: center;
        }
      </style>

    </li>

    <li onclick="copyRadio(event, this)">
      <div class="radio-wrapper-23">

        <input id="example-23" type="radio" name="radio-examples">
        <label for="example-23">
          Add This
          <span class="emoji">🔥</span>
        </label>

      </div>
      <style>
        .radio-wrapper-23 label {
          background: #fff;
          padding: .75rem 1rem;
          border: 2px solid #e5e5e5;
          border-radius: .25rem;
          cursor: pointer;
          display: inline-block;
          box-sizing: border-box;
          font-weight: 500;
          position: relative;
          min-width: 140px;
          text-align: left;
        }

        .radio-wrapper-23 input {
          clip: rect(0, 0, 0, 0);
          border-width: 0;
          height: 1px;
          margin: -1px;
          overflow: hidden;
          padding: 0;
          position: absolute;
          white-space: nowrap;
          width: 1px;
        }

        .radio-wrapper-23 input:checked~label {
          box-shadow: rgb(220 38 38) 0 0 0 2px;
          color: rgb(220 38 38);
          background: rgb(254 242 242);
          border-color: transparent;
        }

        .radio-wrapper-23 label .emoji {
          position: absolute;
          right: 1rem;
          top: auto;
          bottom: auto;
          margin: auto;
          display: none;
        }

        .radio-wrapper-23 input:checked~label .emoji {
          display: initial;
        }
      </style>

    </li>

    <li onclick="copyRadio(event, this)">
      <div class="radio-wrapper-24">

        <input id="example-24" type="radio" name="radio-examples">
        <label for="example-24">Radio </label>

      </div>
      <style>
        .radio-wrapper-24 {
          display: flex;
          align-items: center;
        }

        .radio-wrapper-24 label {
          color: rgb(55 65 81);
          font-weight: 500;
          font-size: .875rem;
          line-height: 1.25rem;
          padding-left: .5rem;
        }

        .radio-wrapper-24 input {
          -webkit-appearance: none;
          -moz-appearance: none;
          appearance: none;
          padding: 0;
          -webkit-print-color-adjust: exact;
          print-color-adjust: exact;
          display: inline-block;
          vertical-align: middle;
          background-origin: border-box;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
          color: rgb(37 99 235);

          border: 1px solid rgb(209 213 219);

          box-shadow: 0 1px 2px 0 #0000000d;
          border-radius: 9999px;
          width: 1rem;
          height: 1rem;

          margin: 0;
        }

        .radio-wrapper-24 input:checked {
          border-color: #0000;
          background-color: currentColor;
          background-size: 100% 100%;
          background-position: 50%;
          background-repeat: no-repeat;
          background-image: url(data:image/svg+xml;charset=utf-8;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMTYgMTYiIGZpbGw9IiNmZmYiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iOCIgY3k9IjgiIHI9IjMiLz48L3N2Zz4=);
        }

        .radio-wrapper-24 input:focus {
          box-shadow: 0 0 0 3px rgb(191 219 254), 0 1px 2px 0 #0000000d;
        }

        .radio-wrapper-24 input:disabled {
          color: rgb(156 163 175);
        }
      </style>

    </li>

    <li onclick="copyRadio(event, this)">
      <div class="radio-wrapper-25">

        <label for="example-25">
          <div>
            <span class="title">Radio </span>
            <span class="desc">Description</span>
          </div>
          <input id="example-25" type="radio" name="radio-examples">
        </label>

      </div>
      <style>
        .radio-wrapper-25 label {
          display: flex;
          align-items: flex-start;
          text-align: left;
          min-width: 140px;
          justify-content: space-between;
          border: 1px solid rgb(229 231 235);

          padding: 11px;
          border-radius: 10px;

          background: rgba(255, 255, 255, 0.2);

          box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
          backdrop-filter: blur(5px);
          -webkit-backdrop-filter: blur(5px);
          border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .radio-wrapper-25 label div {
          color: rgb(55 65 81);
          font-size: .875rem;
          line-height: 1.25rem;

          display: flex;
          flex-direction: column;
        }

        .radio-wrapper-25 label .title {
          font-weight: 500;
        }

        .radio-wrapper-25 label .desc {
          color: rgb(107 114 128);
        }

        .radio-wrapper-25 input {
          -webkit-appearance: none;
          -moz-appearance: none;
          appearance: none;
          padding: 0;
          -webkit-print-color-adjust: exact;
          print-color-adjust: exact;
          display: inline-block;
          vertical-align: middle;
          background-origin: border-box;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
          color: rgb(37 99 235);

          border: 1px solid rgb(209 213 219);

          box-shadow: 0 1px 2px 0 #0000000d;
          border-radius: 9999px;
          width: 1rem;
          height: 1rem;

          margin: 2px 0 0;
        }

        .radio-wrapper-25 input:checked {
          border-color: #0000;
          background-color: currentColor;
          background-size: 100% 100%;
          background-position: 50%;
          background-repeat: no-repeat;
          background-image: url(data:image/svg+xml;charset=utf-8;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMTYgMTYiIGZpbGw9IiNmZmYiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iOCIgY3k9IjgiIHI9IjMiLz48L3N2Zz4=);
        }

        .radio-wrapper-25 input:focus {
          box-shadow: 0 0 0 3px rgb(191 219 254), 0 1px 2px 0 #0000000d;
        }

        .radio-wrapper-25 input:disabled {
          color: rgb(156 163 175);
        }
      </style>

    </li>


    <li onclick="copyRadio(event, this)">
      <div class="radio-wrapper-26">

        <label for="example-26">
          <div class="inputAndLeftText">
            <input id="example-26" type="radio" name="radio-examples">
            <div>
              <span class="title">Add This </span>
              <span class="desc">Description</span>
            </div>
          </div>
          <span class="price">$90</span>
        </label>

      </div>


      <style>
        .radio-wrapper-26 {
          width: 90%;
        }

        .radio-wrapper-26 label {
          display: flex;
          align-items: flex-start;
          text-align: left;
          min-width: 140px;
          justify-content: space-between;
          padding: 11px;
          border: none;
          border-radius: 6px;
          box-shadow: 0 0 0 1px #d8dee4;
          transition: all 0.2s ease;
          font-size: .875rem;
        }

        .radio-wrapper-26 label:not(:has(input:disabled)):hover {
          background: #f5f6f8;
        }

        .radio-wrapper-26 label:has(input:disabled) {
          opacity: .8;
          cursor: not-allowed;
          background: #f5f6f8;
        }

        .radio-wrapper-26 label:has(input:checked) {
          box-shadow: 0 0 0 1.5px rgb(37 99 235), 0 0 0 1px #d8dee4;
        }

        .radio-wrapper-26 label:has(input:focus) {
          box-shadow: 0 0 0 1.5px rgb(37 99 235), 0 0 0 4px rgb(191 219 254), 0 0 0 1px #d8dee4;
        }

        .radio-wrapper-26 label .inputAndLeftText {
          display: flex;
          gap: .75em;
        }

        .radio-wrapper-26 label .inputAndLeftText div {
          color: rgb(55 65 81);
          line-height: 1.25rem;

          display: flex;
          flex-direction: column;
        }

        .radio-wrapper-26 label .title,
        .radio-wrapper-26 label .price {
          font-weight: 500;
        }

        .radio-wrapper-26 label .desc {
          color: rgb(107 114 128);
        }

        .radio-wrapper-26 input,
        .radio-wrapper-26 label .price {
          color: rgb(37 99 235);
        }

        .radio-wrapper-26 label .price {
          margin-top: 1px;
        }

        .radio-wrapper-26 input {
          -webkit-appearance: none;
          -moz-appearance: none;
          appearance: none;
          padding: 0;
          -webkit-print-color-adjust: exact;
          print-color-adjust: exact;
          display: inline-block;
          vertical-align: middle;
          background-origin: border-box;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;

          border: 1px solid rgb(209 213 219);

          box-shadow: 0 1px 2px 0 #0000000d;
          border-radius: 9999px;
          width: 1rem;
          height: 1rem;

          margin: 2px 0 0;
        }

        .radio-wrapper-26 input:checked {
          border-color: #0000;
          background-color: currentColor;
          background-image: url(data:image/svg+xml;charset=utf-8;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMTYgMTYiIGZpbGw9IiNmZmYiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iOCIgY3k9IjgiIHI9IjMiLz48L3N2Zz4=);
        }

        .radio-wrapper-26 input:focus {
          box-shadow: 0 0 0 3px rgb(191 219 254), 0 1px 2px 0 #0000000d;
        }

        .radio-wrapper-26 input:disabled,
        .radio-wrapper-26 label:has(input:disabled) .price {
          color: rgb(156 163 175);
        }
      </style>

    </li>

    <li onclick="copyRadio(event, this)">
      <div class="radio-wrapper-27">

        <input id="example-27" type="radio" name="radio-examples">
        <label for="example-27">Radio </label>

      </div>
      <style>
        .radio-wrapper-27 {
          display: flex;
          align-items: center;
          --bc: 27.8078% .029596 256.847952;
        }

        .radio-wrapper-27 label {
          padding-left: .6em;
          font-size: .875rem;
          line-height: 1.25rem;
          --tw-text-opacity: 1;
          color: oklch(var(--bc)/var(--tw-text-opacity));
        }

        .radio-wrapper-27 input[type="radio"] {
          margin: 0;
          padding: 0;
          -webkit-appearance: none;
          -moz-appearance: none;
          appearance: none;
          height: 1.5rem;
          width: 1.5rem;
          cursor: pointer;
          border-radius: 9999px;
          border-width: 1px;
          border-style: solid;
          border-color: oklch(var(--bc) / var(--tw-border-opacity));
          --tw-border-opacity: .2;
          --chkbg: var(--bc);
          --b1: 100% 0 0;
        }

        .radio-wrapper-27 input[type="radio"]:checked,
        .radio-wrapper-27 input[type="radio"][aria-checked=true] {
          --tw-bg-opacity: 1;
          background-color: oklch(var(--bc) / var(--tw-bg-opacity));
          background-image: none;
          animation: radiomark-27 var(--animation-input, .2s) ease-out;
          box-shadow: 0 0 0 4px oklch(var(--b1) / 1) inset, 0 0 0 4px oklch(var(--b1) / 1) inset;
        }

        @keyframes radiomark-27 {
          0% {
            box-shadow: 0 0 0 12px oklch(var(--b1) /1) inset, 0 0 0 12px oklch(var(--b1) /1) inset;
          }

          50% {
            box-shadow: 0 0 0 3px oklch(var(--b1) /1) inset, 0 0 0 3px oklch(var(--b1) /1) inset;
          }

          100% {
            box-shadow: 0 0 0 4px oklch(var(--b1) /1) inset, 0 0 0 4px oklch(var(--b1) /1) inset;
          }
        }
      </style>

    </li>


    <li onclick="copyRadio(event, this)">
      <div class="radio-wrapper-30">

        <label for="example-30">
          Radio
          <input id="example-30" type="radio" name="radio-examples">
          <div class="control__indicator"></div>
        </label>

      </div>
      <style>
        .radio-wrapper-30 label {
          display: block;
          position: relative;
          padding-left: 30px;
          margin-bottom: 15px;
          cursor: pointer;
          font-size: 18px;
        }

        .radio-wrapper-30 input {
          position: absolute;
          z-index: -1;
          opacity: 0;
          appearance: none;
          -moz-appearance: none;
          -webkit-appearance: none;
        }

        .radio-wrapper-30 .control__indicator {
          position: absolute;
          top: 2px;
          left: 0;
          height: 20px;
          width: 20px;
          background: #e6e6e6;
          border-radius: 50%;
        }

        .radio-wrapper-30:hover input~.control__indicator,
        .radio-wrapper-30 input:focus~.control__indicator {
          background: #ccc;
        }

        .radio-wrapper-30 input:checked~.control__indicator {
          background: #2aa1c0;
        }

        .radio-wrapper-30:hover input:not([disabled]):checked~.control__indicator,
        .radio-wrapper-30 input:checked:focus~.control__indicator {
          background: #0e647d;
        }

        .radio-wrapper-30 input:disabled~.control__indicator {
          background: #e6e6e6;
          opacity: 0.6;
          pointer-events: none;
        }

        .radio-wrapper-30 .control__indicator:after {
          content: '';
          position: absolute;
          display: none;
        }

        .radio-wrapper-30 input:checked~.control__indicator:after {
          display: block;
        }

        .radio-wrapper-30 .control__indicator:after {
          left: 7px;
          top: 7px;
          height: 6px;
          width: 6px;
          border-radius: 50%;
          background: #fff;
        }

        .radio-wrapper-30 input:disabled~.control__indicator:after {
          background: #7b7b7b;
        }
      </style>

    </li>

    <li onclick="copyRadio(event, this)">
      <div class="radio-wrapper-31">

        <label for="example-31">
          <input id="example-31" type="radio" name="radio-examples">
          <span class="label"></span>
          Radio
        </label>

      </div>
      <style>
        .radio-wrapper-31 * {
          box-sizing: border-box;
        }

        .radio-wrapper-31 label {
          position: relative;
          cursor: pointer;
          line-height: 20px;
          font-size: 14px;
          padding: 3px 0;
        }

        .radio-wrapper-31 .label {
          position: relative;
          display: block;
          float: left;
          margin-right: 10px;
          width: 20px;
          height: 20px;
          border: 2px solid #c8ccd4;
          border-radius: 100%;
          -webkit-tap-highlight-color: transparent;
          margin-top: 1px;
        }

        .radio-wrapper-31 .label:after {
          content: '';
          position: absolute;
          top: 3px;
          left: 3px;
          width: 10px;
          height: 10px;
          border-radius: 100%;
          background: #225cff;
          transform: scale(0);
          transition: all 0.2s ease;
          opacity: 0.08;
          pointer-events: none;
        }

        .radio-wrapper-31:hover .label:after {
          transform: scale(3.6);
        }

        .radio-wrapper-31 input[type="radio"]:checked+.label {
          border-color: #225cff;
        }

        .radio-wrapper-31 input[type="radio"]:checked+.label:after {
          transform: scale(1);
          transition: all 0.2s cubic-bezier(0.35, 0.9, 0.4, 0.9);
          opacity: 1;
        }

        .radio-wrapper-31 input[type="radio"] {
          display: none;
        }
      </style>

    </li>


    <li onclick="copyRadio(event, this)">
      <div class="radio-wrapper-33">

        <label for="example-33">
          <input id="example-33" type="radio" name="radio-examples">
          Radio
        </label>

      </div>
      <style>
        .radio-wrapper-33 label {
          display: inline-flex;
          align-items: center;
          background: #fff;
          padding: 5px 15px;
          margin: 0;
          border: 1px solid #eeeeee;
          -webkit-transition: all 0.1s linear;
          -moz-transition: all 0.1s linear;
          transition: all 0.1s linear;
          line-height: 1.55;
          color: #737373;
        }

        .radio-wrapper-33 input {
          margin: 0;
          margin-right: .5em;
          color: #000000;
          appearance: none;
          -moz-appearance: none;
          -webkit-appearance: none;
          border: 2px solid #000000;
          width: 14px;
          height: 14px;
          border-radius: 100px;
        }

        .radio-wrapper-33 label:has(input:checked) {
          background: #ffffff;
        }

        .radio-wrapper-33 label:has(input:checked) input {
          border-color: #474747;
          background: #040404;
          box-shadow: #585858 0px 0px 0px 2px inset;
        }
      </style>

    </li>
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



  <!-- Notyf Notification -->
  <!-- Notyf CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
  <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
  <script>
  const notyf = new Notyf({
    duration: 2000,
    position: { x: 'right', y: 'bottom' }
  });

  function copyRadio(event, element) {
    const clicked = event.target;

    // Prevent copy if clicking radio input or label
    if (
      clicked.tagName === 'INPUT' ||
      clicked.tagName === 'LABEL' ||
      clicked.closest('label')
    ) return;

    if (element.classList.contains('copied')) {
      notyf.error('Already copied!');
      return;
    }

    const clone = element.cloneNode(true);
    clone.classList.remove('copied');

    const htmlContent = clone.innerHTML.trim();

    navigator.clipboard.writeText(htmlContent)
      .then(() => {
        element.classList.add('copied');
        notyf.success('Radio Copied!');
        // Optional: remove 'copied' class after 2 seconds
        setTimeout(() => element.classList.remove('copied'), 2000);
      })
      .catch(err => {
        notyf.error('Failed to copy!');
        console.error(err);
      });
  }
</script>


  <style>
    .radios-wrapper li {
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 10px;
      margin-bottom: 15px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .radios-wrapper li:not(.copied):hover {
      background: #f5faff;
    }

    .radios-wrapper li.copied {
      background: #e6ffe6;
      border-color: #8bc34a;
      cursor: default;
    }
  </style>

</body>