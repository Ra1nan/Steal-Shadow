<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

  <title>Free Modern Checkbox Collection with Live Preview - Steal Shadow</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="canonical" href=" " />


  <meta name="description"
    content="Free Beautiful Checkbox presets and instantly copy them. Browse modern Checkbox with live previews and get  ready Checkbox for your UI project. " />

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

    ul.checkboxes-wrapper {
      display: flex;
      flex-wrap: wrap;
      padding: 4em 0;
      width: 100%;
      max-width: 1280px;
      margin: 0 auto;
      justify-content: space-around;
    }

    .checkboxes-wrapper li {
      border-radius: 6px;
      margin: 2em 1em;
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
    }

    .checkboxes-wrapper li:hover {
      cursor: pointer;
      box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
    }

    .checkboxes-wrapper li.copied {
      background: rgba(194, 251, 215, .2);
    }


    .checkboxes-wrapper li .credits {
      font-size: .7em;
      opacity: .85;
      display: block;
      padding-top: 2em;
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






    @media all and (min-width: 768px) {
      ul.checkboxes-wrapper {
        padding: 4em 0;
        justify-content: space-between;
      }

      .checkboxes-wrapper li {
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
      ul.checkboxes-wrapper {
        justify-content: space-around;
      }

      .checkboxes-wrapper li {
        padding: 1em 0;
        margin: 2em;
        flex: 0 0 200px;
        height: 150px;
      }
    }


    .checkboxes-wrapper {
      font-family: -apple-system, system-ui, Roboto, sans-serif;
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

 

    a.green-btn-style {
      background: #c2fbd7;
      color: green;
      transition: 200ms;
      padding: 0px 5px;
      border-radius: 4px;
      display: inline-block;
    }

    a.green-btn-style:hover {
      background: #afe6c3;
      transform: scale(1.05);
    }






    .producthunt-badges {
      display: flex;
      flex-direction: column;
      gap: 16px;
      justify-content: center;
      align-items: center;
      margin: 3em 0;
    }

    .producthunt-badge-wrapper img {
      width: 122px;
      height: 37px;
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

  <h1>Free Modern Checkbox Collection</h1>
  <p>
    Free  Modern Checkbox Collection features a curated set of clean, elegant, and customizable <br>  Checkbox
    styles that you can instantly copy and use in your web projects.
  </p>
  <p class="shortcuts-disclaimer">🎯 Press <span class="shortcut">Ctrl+D</span> to bookmark this page</p>







  <ul class="checkboxes-wrapper">



    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-1">
        <input id="example-1" class="substituted" type="checkbox" aria-hidden="true">
        <label for="example-1">Checkbox</label>
      </div>

      <style>
        .checkbox-wrapper-1 *,
        .checkbox-wrapper-1 ::after,
        .checkbox-wrapper-1 ::before {
          box-sizing: border-box;
        }

        .checkbox-wrapper-1 [type=checkbox].substituted {
          margin: 0;
          width: 0;
          height: 0;
          display: inline;
          -webkit-appearance: none;
          -moz-appearance: none;
          appearance: none;
        }

        .checkbox-wrapper-1 [type=checkbox].substituted+label:before {
          content: "";
          display: inline-block;
          vertical-align: top;
          height: 1.15em;
          width: 1.15em;
          margin-right: 0.6em;
          color: rgba(0, 0, 0, 0.275);
          border: solid 0.06em;
          box-shadow: 0 0 0.04em, 0 0.06em 0.16em -0.03em inset, 0 0 0 0.07em transparent inset;
          border-radius: 0.2em;
          background: url('data:image/svg+xml;charset=UTF-8,<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xml:space="preserve" fill="white" viewBox="0 0 9 9"><rect x="0" y="4.3" transform="matrix(-0.707 -0.7072 0.7072 -0.707 0.5891 10.4702)" width="4.3" height="1.6" /><rect x="2.2" y="2.9" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 12.1877 2.9833)" width="6.1" height="1.7" /></svg>') no-repeat center, white;
          background-size: 0;
          will-change: color, border, background, background-size, box-shadow;
          transform: translate3d(0, 0, 0);
          transition: color 0.1s, border 0.1s, background 0.15s, box-shadow 0.1s;
        }

        .checkbox-wrapper-1 [type=checkbox].substituted:enabled:active+label:before,
        .checkbox-wrapper-1 [type=checkbox].substituted:enabled+label:active:before {
          box-shadow: 0 0 0.04em, 0 0.06em 0.16em -0.03em transparent inset, 0 0 0 0.07em rgba(0, 0, 0, 0.1) inset;
          background-color: #f0f0f0;
        }

        .checkbox-wrapper-1 [type=checkbox].substituted:checked+label:before {
          background-color: #3B99FC;
          background-size: 0.75em;
          color: rgba(0, 0, 0, 0.075);
        }

        .checkbox-wrapper-1 [type=checkbox].substituted:checked:enabled:active+label:before,
        .checkbox-wrapper-1 [type=checkbox].substituted:checked:enabled+label:active:before {
          background-color: #0a7ffb;
          color: rgba(0, 0, 0, 0.275);
        }

        .checkbox-wrapper-1 [type=checkbox].substituted:focus+label:before {
          box-shadow: 0 0 0.04em, 0 0.06em 0.16em -0.03em transparent inset, 0 0 0 0.07em rgba(0, 0, 0, 0.1) inset, 0 0 0 3.3px rgba(65, 159, 255, 0.55), 0 0 0 5px rgba(65, 159, 255, 0.3);
        }

        .checkbox-wrapper-1 [type=checkbox].substituted:focus:active+label:before,
        .checkbox-wrapper-1 [type=checkbox].substituted:focus+label:active:before {
          box-shadow: 0 0 0.04em, 0 0.06em 0.16em -0.03em transparent inset, 0 0 0 0.07em rgba(0, 0, 0, 0.1) inset, 0 0 0 3.3px rgba(65, 159, 255, 0.55), 0 0 0 5px rgba(65, 159, 255, 0.3);
        }

        .checkbox-wrapper-1 [type=checkbox].substituted:disabled+label:before {
          opacity: 0.5;
        }

        .checkbox-wrapper-1 [type=checkbox].substituted.dark+label:before {
          color: rgba(255, 255, 255, 0.275);
          background-color: #222;
          background-image: url('data:image/svg+xml;charset=UTF-8,<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xml:space="preserve" fill="rgba(34, 34, 34, 0.999)" viewBox="0 0 9 9"><rect x="0" y="4.3" transform="matrix(-0.707 -0.7072 0.7072 -0.707 0.5891 10.4702)" width="4.3" height="1.6" /><rect x="2.2" y="2.9" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 12.1877 2.9833)" width="6.1" height="1.7" /></svg>');
        }

        .checkbox-wrapper-1 [type=checkbox].substituted.dark:enabled:active+label:before,
        .checkbox-wrapper-1 [type=checkbox].substituted.dark:enabled+label:active:before {
          background-color: #444;
          box-shadow: 0 0 0.04em, 0 0.06em 0.16em -0.03em transparent inset, 0 0 0 0.07em rgba(255, 255, 255, 0.1) inset;
        }

        .checkbox-wrapper-1 [type=checkbox].substituted.dark:checked+label:before {
          background-color: #a97035;
          color: rgba(255, 255, 255, 0.075);
        }

        .checkbox-wrapper-1 [type=checkbox].substituted.dark:checked:enabled:active+label:before,
        .checkbox-wrapper-1 [type=checkbox].substituted.dark:checked:enabled+label:active:before {
          background-color: #c68035;
          color: rgba(0, 0, 0, 0.275);
        }

        .checkbox-wrapper-1 [type=checkbox].substituted+label {
          -webkit-user-select: none;
          user-select: none;
        }
      </style>
    </li>




    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-2">

        <input type="checkbox" class="sc-gJwTLC ikxBAC">

      </div>
      <style>
        .checkbox-wrapper-2 .ikxBAC {
          appearance: none;
          background-color: #dfe1e4;
          border-radius: 72px;
          border-style: none;
          flex-shrink: 0;
          height: 20px;
          margin: 0;
          position: relative;
          width: 30px;
        }

        .checkbox-wrapper-2 .ikxBAC::before {
          bottom: -6px;
          content: "";
          left: -6px;
          position: absolute;
          right: -6px;
          top: -6px;
        }

        .checkbox-wrapper-2 .ikxBAC,
        .checkbox-wrapper-2 .ikxBAC::after {
          transition: all 100ms ease-out;
        }

        .checkbox-wrapper-2 .ikxBAC::after {
          background-color: #fff;
          border-radius: 50%;
          content: "";
          height: 14px;
          left: 3px;
          position: absolute;
          top: 3px;
          width: 14px;
        }

        .checkbox-wrapper-2 input[type=checkbox] {
          cursor: default;
        }

        .checkbox-wrapper-2 .ikxBAC:hover {
          background-color: #c9cbcd;
          transition-duration: 0s;
        }

        .checkbox-wrapper-2 .ikxBAC:checked {
          background-color: #6e79d6;
        }

        .checkbox-wrapper-2 .ikxBAC:checked::after {
          background-color: #fff;
          left: 13px;
        }

        .checkbox-wrapper-2 :focus:not(.focus-visible) {
          outline: 0;
        }

        .checkbox-wrapper-2 .ikxBAC:checked:hover {
          background-color: #535db3;
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-3">

        <input type="checkbox" id="cbx-3">
        <label for="cbx-3" class="toggle"><span></span></label>

      </div>
      <style>
        .checkbox-wrapper-3 input[type="checkbox"] {
          visibility: hidden;
          display: none;
        }

        .checkbox-wrapper-3 .toggle {
          position: relative;
          display: block;
          width: 40px;
          height: 20px;
          cursor: pointer;
          -webkit-tap-highlight-color: transparent;
          transform: translate3d(0, 0, 0);
        }

        .checkbox-wrapper-3 .toggle:before {
          content: "";
          position: relative;
          top: 3px;
          left: 3px;
          width: 34px;
          height: 14px;
          display: block;
          background: #9A9999;
          border-radius: 8px;
          transition: background 0.2s ease;
        }

        .checkbox-wrapper-3 .toggle span {
          position: absolute;
          top: 0;
          left: 0;
          width: 20px;
          height: 20px;
          display: block;
          background: white;
          border-radius: 10px;
          box-shadow: 0 3px 8px rgba(154, 153, 153, 0.5);
          transition: all 0.2s ease;
        }

        .checkbox-wrapper-3 .toggle span:before {
          content: "";
          position: absolute;
          display: block;
          margin: -18px;
          width: 56px;
          height: 56px;
          background: rgba(79, 46, 220, 0.5);
          border-radius: 50%;
          transform: scale(0);
          opacity: 1;
          pointer-events: none;
        }

        .checkbox-wrapper-3 #cbx-3:checked+.toggle:before {
          background: #947ADA;
        }

        .checkbox-wrapper-3 #cbx-3:checked+.toggle span {
          background: #4F2EDC;
          transform: translateX(20px);
          transition: all 0.2s cubic-bezier(0.8, 0.4, 0.3, 1.25), background 0.15s ease;
          box-shadow: 0 3px 8px rgba(79, 46, 220, 0.2);
        }

        .checkbox-wrapper-3 #cbx-3:checked+.toggle span:before {
          transform: scale(1);
          opacity: 0;
          transition: all 0.4s ease;
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-4">

        <input class="inp-cbx" id="morning" type="checkbox">
        <label class="cbx" for="morning"><span>
            <svg width="12px" height="10px">
              <use xlink:href="#check-4"></use>
            </svg></span><span>Morning</span></label>
        <svg class="inline-svg">
          <symbol id="check-4" viewBox="0 0 12 10">
            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
          </symbol>
        </svg>

      </div>
      <style>
        .checkbox-wrapper-4 * {
          box-sizing: border-box;
        }

        .checkbox-wrapper-4 .cbx {
          -webkit-user-select: none;
          user-select: none;
          cursor: pointer;
          padding: 6px 8px;
          border-radius: 6px;
          overflow: hidden;
          transition: all 0.2s ease;
          display: inline-block;
        }

        .checkbox-wrapper-4 .cbx:not(:last-child) {
          margin-right: 6px;
        }

        .checkbox-wrapper-4 .cbx:hover {
          background: rgba(0, 119, 255, 0.06);
        }

        .checkbox-wrapper-4 .cbx span {
          float: left;
          vertical-align: middle;
          transform: translate3d(0, 0, 0);
        }

        .checkbox-wrapper-4 .cbx span:first-child {
          position: relative;
          width: 18px;
          height: 18px;
          border-radius: 4px;
          transform: scale(1);
          border: 1px solid #cccfdb;
          transition: all 0.2s ease;
          box-shadow: 0 1px 1px rgba(0, 16, 75, 0.05);
        }

        .checkbox-wrapper-4 .cbx span:first-child svg {
          position: absolute;
          top: 3px;
          left: 2px;
          fill: none;
          stroke: #fff;
          stroke-width: 2;
          stroke-linecap: round;
          stroke-linejoin: round;
          stroke-dasharray: 16px;
          stroke-dashoffset: 16px;
          transition: all 0.3s ease;
          transition-delay: 0.1s;
          transform: translate3d(0, 0, 0);
        }

        .checkbox-wrapper-4 .cbx span:last-child {
          padding-left: 8px;
          line-height: 18px;
        }

        .checkbox-wrapper-4 .cbx:hover span:first-child {
          border-color: #07f;
        }

        .checkbox-wrapper-4 .inp-cbx {
          position: absolute;
          visibility: hidden;
        }

        .checkbox-wrapper-4 .inp-cbx:checked+.cbx span:first-child {
          background: #07f;
          border-color: #07f;
          animation: wave-4 0.4s ease;
        }

        .checkbox-wrapper-4 .inp-cbx:checked+.cbx span:first-child svg {
          stroke-dashoffset: 0;
        }

        .checkbox-wrapper-4 .inline-svg {
          position: absolute;
          width: 0;
          height: 0;
          pointer-events: none;
          user-select: none;
        }

        @media screen and (max-width: 640px) {
          .checkbox-wrapper-4 .cbx {
            width: 100%;
            display: inline-block;
          }
        }

        @-moz-keyframes wave-4 {
          50% {
            transform: scale(0.9);
          }
        }

        @-webkit-keyframes wave-4 {
          50% {
            transform: scale(0.9);
          }
        }

        @-o-keyframes wave-4 {
          50% {
            transform: scale(0.9);
          }
        }

        @keyframes wave-4 {
          50% {
            transform: scale(0.9);
          }
        }
      </style>

    </li>


    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-6">

        <input class="tgl tgl-light" id="cb1-6" type="checkbox">
        <label class="tgl-btn" for="cb1-6">

        </label>
      </div>
      <style>
        .checkbox-wrapper-6 .tgl {
          display: none;
        }

        .checkbox-wrapper-6 .tgl,
        .checkbox-wrapper-6 .tgl:after,
        .checkbox-wrapper-6 .tgl:before,
        .checkbox-wrapper-6 .tgl *,
        .checkbox-wrapper-6 .tgl *:after,
        .checkbox-wrapper-6 .tgl *:before,
        .checkbox-wrapper-6 .tgl+.tgl-btn {
          box-sizing: border-box;
        }

        .checkbox-wrapper-6 .tgl::-moz-selection,
        .checkbox-wrapper-6 .tgl:after::-moz-selection,
        .checkbox-wrapper-6 .tgl:before::-moz-selection,
        .checkbox-wrapper-6 .tgl *::-moz-selection,
        .checkbox-wrapper-6 .tgl *:after::-moz-selection,
        .checkbox-wrapper-6 .tgl *:before::-moz-selection,
        .checkbox-wrapper-6 .tgl+.tgl-btn::-moz-selection,
        .checkbox-wrapper-6 .tgl::selection,
        .checkbox-wrapper-6 .tgl:after::selection,
        .checkbox-wrapper-6 .tgl:before::selection,
        .checkbox-wrapper-6 .tgl *::selection,
        .checkbox-wrapper-6 .tgl *:after::selection,
        .checkbox-wrapper-6 .tgl *:before::selection,
        .checkbox-wrapper-6 .tgl+.tgl-btn::selection {
          background: none;
        }

        .checkbox-wrapper-6 .tgl+.tgl-btn {
          outline: 0;
          display: block;
          width: 4em;
          height: 2em;
          position: relative;
          cursor: pointer;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }

        .checkbox-wrapper-6 .tgl+.tgl-btn:after,
        .checkbox-wrapper-6 .tgl+.tgl-btn:before {
          position: relative;
          display: block;
          content: "";
          width: 50%;
          height: 100%;
        }

        .checkbox-wrapper-6 .tgl+.tgl-btn:after {
          left: 0;
        }

        .checkbox-wrapper-6 .tgl+.tgl-btn:before {
          display: none;
        }

        .checkbox-wrapper-6 .tgl:checked+.tgl-btn:after {
          left: 50%;
        }

        .checkbox-wrapper-6 .tgl-light+.tgl-btn {
          background: #f0f0f0;
          border-radius: 2em;
          padding: 2px;
          transition: all 0.4s ease;
        }

        .checkbox-wrapper-6 .tgl-light+.tgl-btn:after {
          border-radius: 50%;
          background: #fff;
          transition: all 0.2s ease;
        }

        .checkbox-wrapper-6 .tgl-light:checked+.tgl-btn {
          background: #9FD6AE;
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-7">

        <input class="tgl tgl-ios" id="cb2-7" type="checkbox">
        <label class="tgl-btn" for="cb2-7">

        </label>
      </div>
      <style>
        .checkbox-wrapper-7 .tgl {
          display: none;
        }

        .checkbox-wrapper-7 .tgl,
        .checkbox-wrapper-7 .tgl:after,
        .checkbox-wrapper-7 .tgl:before,
        .checkbox-wrapper-7 .tgl *,
        .checkbox-wrapper-7 .tgl *:after,
        .checkbox-wrapper-7 .tgl *:before,
        .checkbox-wrapper-7 .tgl+.tgl-btn {
          box-sizing: border-box;
        }

        .checkbox-wrapper-7 .tgl::-moz-selection,
        .checkbox-wrapper-7 .tgl:after::-moz-selection,
        .checkbox-wrapper-7 .tgl:before::-moz-selection,
        .checkbox-wrapper-7 .tgl *::-moz-selection,
        .checkbox-wrapper-7 .tgl *:after::-moz-selection,
        .checkbox-wrapper-7 .tgl *:before::-moz-selection,
        .checkbox-wrapper-7 .tgl+.tgl-btn::-moz-selection,
        .checkbox-wrapper-7 .tgl::selection,
        .checkbox-wrapper-7 .tgl:after::selection,
        .checkbox-wrapper-7 .tgl:before::selection,
        .checkbox-wrapper-7 .tgl *::selection,
        .checkbox-wrapper-7 .tgl *:after::selection,
        .checkbox-wrapper-7 .tgl *:before::selection,
        .checkbox-wrapper-7 .tgl+.tgl-btn::selection {
          background: none;
        }

        .checkbox-wrapper-7 .tgl+.tgl-btn {
          outline: 0;
          display: block;
          width: 4em;
          height: 2em;
          position: relative;
          cursor: pointer;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }

        .checkbox-wrapper-7 .tgl+.tgl-btn:after,
        .checkbox-wrapper-7 .tgl+.tgl-btn:before {
          position: relative;
          display: block;
          content: "";
          width: 50%;
          height: 100%;
        }

        .checkbox-wrapper-7 .tgl+.tgl-btn:after {
          left: 0;
        }

        .checkbox-wrapper-7 .tgl+.tgl-btn:before {
          display: none;
        }

        .checkbox-wrapper-7 .tgl:checked+.tgl-btn:after {
          left: 50%;
        }

        .checkbox-wrapper-7 .tgl-ios+.tgl-btn {
          background: #fbfbfb;
          border-radius: 2em;
          padding: 2px;
          transition: all 0.4s ease;
          border: 1px solid #e8eae9;
        }

        .checkbox-wrapper-7 .tgl-ios+.tgl-btn:after {
          border-radius: 2em;
          background: #fbfbfb;
          transition: left 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275), padding 0.3s ease, margin 0.3s ease;
          box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.1), 0 4px 0 rgba(0, 0, 0, 0.08);
        }

        .checkbox-wrapper-7 .tgl-ios+.tgl-btn:hover:after {
          will-change: padding;
        }

        .checkbox-wrapper-7 .tgl-ios+.tgl-btn:active {
          box-shadow: inset 0 0 0 2em #e8eae9;
        }

        .checkbox-wrapper-7 .tgl-ios+.tgl-btn:active:after {
          padding-right: 0.8em;
        }

        .checkbox-wrapper-7 .tgl-ios:checked+.tgl-btn {
          background: #86d993;
        }

        .checkbox-wrapper-7 .tgl-ios:checked+.tgl-btn:active {
          box-shadow: none;
        }

        .checkbox-wrapper-7 .tgl-ios:checked+.tgl-btn:active:after {
          margin-left: -0.8em;
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-9">

        <input class="tgl tgl-flat" id="cb4-9" type="checkbox">
        <label class="tgl-btn" for="cb4-9"></label>

      </div>
      <style>
        .checkbox-wrapper-9 .tgl {
          display: none;
        }

        .checkbox-wrapper-9 .tgl,
        .checkbox-wrapper-9 .tgl:after,
        .checkbox-wrapper-9 .tgl:before,
        .checkbox-wrapper-9 .tgl *,
        .checkbox-wrapper-9 .tgl *:after,
        .checkbox-wrapper-9 .tgl *:before,
        .checkbox-wrapper-9 .tgl+.tgl-btn {
          box-sizing: border-box;
        }

        .checkbox-wrapper-9 .tgl::-moz-selection,
        .checkbox-wrapper-9 .tgl:after::-moz-selection,
        .checkbox-wrapper-9 .tgl:before::-moz-selection,
        .checkbox-wrapper-9 .tgl *::-moz-selection,
        .checkbox-wrapper-9 .tgl *:after::-moz-selection,
        .checkbox-wrapper-9 .tgl *:before::-moz-selection,
        .checkbox-wrapper-9 .tgl+.tgl-btn::-moz-selection,
        .checkbox-wrapper-9 .tgl::selection,
        .checkbox-wrapper-9 .tgl:after::selection,
        .checkbox-wrapper-9 .tgl:before::selection,
        .checkbox-wrapper-9 .tgl *::selection,
        .checkbox-wrapper-9 .tgl *:after::selection,
        .checkbox-wrapper-9 .tgl *:before::selection,
        .checkbox-wrapper-9 .tgl+.tgl-btn::selection {
          background: none;
        }

        .checkbox-wrapper-9 .tgl+.tgl-btn {
          outline: 0;
          display: block;
          width: 4em;
          height: 2em;
          position: relative;
          cursor: pointer;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }

        .checkbox-wrapper-9 .tgl+.tgl-btn:after,
        .checkbox-wrapper-9 .tgl+.tgl-btn:before {
          position: relative;
          display: block;
          content: "";
          width: 50%;
          height: 100%;
        }

        .checkbox-wrapper-9 .tgl+.tgl-btn:after {
          left: 0;
        }

        .checkbox-wrapper-9 .tgl+.tgl-btn:before {
          display: none;
        }

        .checkbox-wrapper-9 .tgl:checked+.tgl-btn:after {
          left: 50%;
        }

        .checkbox-wrapper-9 .tgl-flat+.tgl-btn {
          padding: 2px;
          transition: all 0.2s ease;
          background: #fff;
          border: 4px solid #f2f2f2;
          border-radius: 2em;
        }

        .checkbox-wrapper-9 .tgl-flat+.tgl-btn:after {
          transition: all 0.2s ease;
          background: #f2f2f2;
          content: "";
          border-radius: 1em;
        }

        .checkbox-wrapper-9 .tgl-flat:checked+.tgl-btn {
          border: 4px solid #7FC6A6;
        }

        .checkbox-wrapper-9 .tgl-flat:checked+.tgl-btn:after {
          left: 50%;
          background: #7FC6A6;
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-12">

        <div class="cbx">
          <input id="cbx-12" type="checkbox">
          <label for="cbx-12"></label>
          <svg width="15" height="14" viewBox="0 0 15 14" fill="none">
            <path d="M2 8.36364L6.23077 12L13 2"></path>
          </svg>
        </div>
        <!-- Gooey-->
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
          <defs>
            <filter id="goo-12">
              <feGaussianBlur in="SourceGraphic" stdDeviation="4" result="blur"></feGaussianBlur>
              <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 22 -7"
                result="goo-12"></feColorMatrix>
              <feBlend in="SourceGraphic" in2="goo-12"></feBlend>
            </filter>
          </defs>
        </svg>

      </div>
      <style>
        .checkbox-wrapper-12 {
          position: relative;
        }

        .checkbox-wrapper-12>svg {
          position: absolute;
          top: -130%;
          left: -170%;
          width: 110px;
          pointer-events: none;
        }

        .checkbox-wrapper-12 * {
          box-sizing: border-box;
        }

        .checkbox-wrapper-12 input[type="checkbox"] {
          -webkit-appearance: none;
          -moz-appearance: none;
          appearance: none;
          -webkit-tap-highlight-color: transparent;
          cursor: pointer;
          margin: 0;
        }

        .checkbox-wrapper-12 input[type="checkbox"]:focus {
          outline: 0;
        }

        .checkbox-wrapper-12 .cbx {
          width: 24px;
          height: 24px;
          top: calc(50vh - 12px);
          left: calc(50vw - 12px);
        }

        .checkbox-wrapper-12 .cbx input {
          position: absolute;
          top: 0;
          left: 0;
          width: 24px;
          height: 24px;
          border: 2px solid #bfbfc0;
          border-radius: 50%;
        }

        .checkbox-wrapper-12 .cbx label {
          width: 24px;
          height: 24px;
          background: none;
          border-radius: 50%;
          position: absolute;
          top: 0;
          left: 0;
          -webkit-filter: url("#goo-12");
          filter: url("#goo-12");
          transform: trasnlate3d(0, 0, 0);
          pointer-events: none;
        }

        .checkbox-wrapper-12 .cbx svg {
          position: absolute;
          top: 5px;
          left: 4px;
          z-index: 1;
          pointer-events: none;
        }

        .checkbox-wrapper-12 .cbx svg path {
          stroke: #fff;
          stroke-width: 3;
          stroke-linecap: round;
          stroke-linejoin: round;
          stroke-dasharray: 19;
          stroke-dashoffset: 19;
          transition: stroke-dashoffset 0.3s ease;
          transition-delay: 0.2s;
        }

        .checkbox-wrapper-12 .cbx input:checked+label {
          animation: splash-12 0.6s ease forwards;
        }

        .checkbox-wrapper-12 .cbx input:checked+label+svg path {
          stroke-dashoffset: 0;
        }

        @-moz-keyframes splash-12 {
          40% {
            background: #866efb;
            box-shadow: 0 -18px 0 -8px #866efb, 16px -8px 0 -8px #866efb, 16px 8px 0 -8px #866efb, 0 18px 0 -8px #866efb, -16px 8px 0 -8px #866efb, -16px -8px 0 -8px #866efb;
          }

          100% {
            background: #866efb;
            box-shadow: 0 -36px 0 -10px transparent, 32px -16px 0 -10px transparent, 32px 16px 0 -10px transparent, 0 36px 0 -10px transparent, -32px 16px 0 -10px transparent, -32px -16px 0 -10px transparent;
          }
        }

        @-webkit-keyframes splash-12 {
          40% {
            background: #866efb;
            box-shadow: 0 -18px 0 -8px #866efb, 16px -8px 0 -8px #866efb, 16px 8px 0 -8px #866efb, 0 18px 0 -8px #866efb, -16px 8px 0 -8px #866efb, -16px -8px 0 -8px #866efb;
          }

          100% {
            background: #866efb;
            box-shadow: 0 -36px 0 -10px transparent, 32px -16px 0 -10px transparent, 32px 16px 0 -10px transparent, 0 36px 0 -10px transparent, -32px 16px 0 -10px transparent, -32px -16px 0 -10px transparent;
          }
        }

        @-o-keyframes splash-12 {
          40% {
            background: #866efb;
            box-shadow: 0 -18px 0 -8px #866efb, 16px -8px 0 -8px #866efb, 16px 8px 0 -8px #866efb, 0 18px 0 -8px #866efb, -16px 8px 0 -8px #866efb, -16px -8px 0 -8px #866efb;
          }

          100% {
            background: #866efb;
            box-shadow: 0 -36px 0 -10px transparent, 32px -16px 0 -10px transparent, 32px 16px 0 -10px transparent, 0 36px 0 -10px transparent, -32px 16px 0 -10px transparent, -32px -16px 0 -10px transparent;
          }
        }

        @keyframes splash-12 {
          40% {
            background: #866efb;
            box-shadow: 0 -18px 0 -8px #866efb, 16px -8px 0 -8px #866efb, 16px 8px 0 -8px #866efb, 0 18px 0 -8px #866efb, -16px 8px 0 -8px #866efb, -16px -8px 0 -8px #866efb;
          }

          100% {
            background: #866efb;
            box-shadow: 0 -36px 0 -10px transparent, 32px -16px 0 -10px transparent, 32px 16px 0 -10px transparent, 0 36px 0 -10px transparent, -32px 16px 0 -10px transparent, -32px -16px 0 -10px transparent;
          }
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-13">

        <input id="c1-13" type="checkbox">
        <label for="c1-13">Checkbox</label>

      </div>
      <style>
        @supports (-webkit-appearance: none) or (-moz-appearance: none) {
          .checkbox-wrapper-13 input[type=checkbox] {
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

          .checkbox-wrapper-13 input[type=checkbox]:after {
            content: "";
            display: block;
            left: 0;
            top: 0;
            position: absolute;
            transition: transform var(--d-t, 0.3s) var(--d-t-e, ease), opacity var(--d-o, 0.2s);
          }

          .checkbox-wrapper-13 input[type=checkbox]:checked {
            --b: var(--active);
            --bc: var(--active);
            --d-o: .3s;
            --d-t: .6s;
            --d-t-e: cubic-bezier(.2, .85, .32, 1.2);
          }

          .checkbox-wrapper-13 input[type=checkbox]:disabled {
            --b: var(--disabled);
            cursor: not-allowed;
            opacity: 0.9;
          }

          .checkbox-wrapper-13 input[type=checkbox]:disabled:checked {
            --b: var(--disabled-inner);
            --bc: var(--border);
          }

          .checkbox-wrapper-13 input[type=checkbox]:disabled+label {
            cursor: not-allowed;
          }

          .checkbox-wrapper-13 input[type=checkbox]:hover:not(:checked):not(:disabled) {
            --bc: var(--border-hover);
          }

          .checkbox-wrapper-13 input[type=checkbox]:focus {
            box-shadow: 0 0 0 var(--focus);
          }

          .checkbox-wrapper-13 input[type=checkbox]:not(.switch) {
            width: 21px;
          }

          .checkbox-wrapper-13 input[type=checkbox]:not(.switch):after {
            opacity: var(--o, 0);
          }

          .checkbox-wrapper-13 input[type=checkbox]:not(.switch):checked {
            --o: 1;
          }

          .checkbox-wrapper-13 input[type=checkbox]+label {
            display: inline-block;
            vertical-align: middle;
            cursor: pointer;
            margin-left: 4px;
          }

          .checkbox-wrapper-13 input[type=checkbox]:not(.switch) {
            border-radius: 7px;
          }

          .checkbox-wrapper-13 input[type=checkbox]:not(.switch):after {
            width: 5px;
            height: 9px;
            border: 2px solid var(--active-inner);
            border-top: 0;
            border-left: 0;
            left: 7px;
            top: 4px;
            transform: rotate(var(--r, 20deg));
          }

          .checkbox-wrapper-13 input[type=checkbox]:not(.switch):checked {
            --r: 43deg;
          }
        }

        .checkbox-wrapper-13 * {
          box-sizing: inherit;
        }

        .checkbox-wrapper-13 *:before,
        .checkbox-wrapper-13 *:after {
          box-sizing: inherit;
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-14">

        <input id="s1-14" type="checkbox" class="switch">
        <label for="s1-14">Switch</label>

      </div>
      <style>
        @supports (-webkit-appearance: none) or (-moz-appearance: none) {
          .checkbox-wrapper-14 input[type=checkbox] {
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

          .checkbox-wrapper-14 input[type=checkbox]:after {
            content: "";
            display: block;
            left: 0;
            top: 0;
            position: absolute;
            transition: transform var(--d-t, 0.3s) var(--d-t-e, ease), opacity var(--d-o, 0.2s);
          }

          .checkbox-wrapper-14 input[type=checkbox]:checked {
            --b: var(--active);
            --bc: var(--active);
            --d-o: .3s;
            --d-t: .6s;
            --d-t-e: cubic-bezier(.2, .85, .32, 1.2);
          }

          .checkbox-wrapper-14 input[type=checkbox]:disabled {
            --b: var(--disabled);
            cursor: not-allowed;
            opacity: 0.9;
          }

          .checkbox-wrapper-14 input[type=checkbox]:disabled:checked {
            --b: var(--disabled-inner);
            --bc: var(--border);
          }

          .checkbox-wrapper-14 input[type=checkbox]:disabled+label {
            cursor: not-allowed;
          }

          .checkbox-wrapper-14 input[type=checkbox]:hover:not(:checked):not(:disabled) {
            --bc: var(--border-hover);
          }

          .checkbox-wrapper-14 input[type=checkbox]:focus {
            box-shadow: 0 0 0 var(--focus);
          }

          .checkbox-wrapper-14 input[type=checkbox]:not(.switch) {
            width: 21px;
          }

          .checkbox-wrapper-14 input[type=checkbox]:not(.switch):after {
            opacity: var(--o, 0);
          }

          .checkbox-wrapper-14 input[type=checkbox]:not(.switch):checked {
            --o: 1;
          }

          .checkbox-wrapper-14 input[type=checkbox]+label {
            display: inline-block;
            vertical-align: middle;
            cursor: pointer;
            margin-left: 4px;
          }

          .checkbox-wrapper-14 input[type=checkbox]:not(.switch) {
            border-radius: 7px;
          }

          .checkbox-wrapper-14 input[type=checkbox]:not(.switch):after {
            width: 5px;
            height: 9px;
            border: 2px solid var(--active-inner);
            border-top: 0;
            border-left: 0;
            left: 7px;
            top: 4px;
            transform: rotate(var(--r, 20deg));
          }

          .checkbox-wrapper-14 input[type=checkbox]:not(.switch):checked {
            --r: 43deg;
          }

          .checkbox-wrapper-14 input[type=checkbox].switch {
            width: 38px;
            border-radius: 11px;
          }

          .checkbox-wrapper-14 input[type=checkbox].switch:after {
            left: 2px;
            top: 2px;
            border-radius: 50%;
            width: 17px;
            height: 17px;
            background: var(--ab, var(--border));
            transform: translateX(var(--x, 0));
          }

          .checkbox-wrapper-14 input[type=checkbox].switch:checked {
            --ab: var(--active-inner);
            --x: 17px;
          }

          .checkbox-wrapper-14 input[type=checkbox].switch:disabled:not(:checked):after {
            opacity: 0.6;
          }
        }

        .checkbox-wrapper-14 * {
          box-sizing: inherit;
        }

        .checkbox-wrapper-14 *:before,
        .checkbox-wrapper-14 *:after {
          box-sizing: inherit;
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-15">

        <input class="inp-cbx" id="cbx-15" type="checkbox" style="display: none;">
        <label class="cbx" for="cbx-15">
          <span>
            <svg width="12px" height="9px" viewBox="0 0 12 9">
              <polyline points="1 5 4 8 11 1"></polyline>
            </svg>
          </span>
          <span>To-do</span>
        </label>

      </div>
      <style>
        .checkbox-wrapper-15 .cbx {
          -webkit-user-select: none;
          user-select: none;
          -webkit-tap-highlight-color: transparent;
          cursor: pointer;
        }

        .checkbox-wrapper-15 .cbx span {
          display: inline-block;
          vertical-align: middle;
          transform: translate3d(0, 0, 0);
        }

        .checkbox-wrapper-15 .cbx span:first-child {
          position: relative;
          width: 24px;
          height: 24px;
          border-radius: 50%;
          transform: scale(1);
          vertical-align: middle;
          border: 1px solid #B9B8C3;
          transition: all 0.2s ease;
        }

        .checkbox-wrapper-15 .cbx span:first-child svg {
          position: absolute;
          z-index: 1;
          top: 8px;
          left: 6px;
          fill: none;
          stroke: white;
          stroke-width: 2;
          stroke-linecap: round;
          stroke-linejoin: round;
          stroke-dasharray: 16px;
          stroke-dashoffset: 16px;
          transition: all 0.3s ease;
          transition-delay: 0.1s;
          transform: translate3d(0, 0, 0);
        }

        .checkbox-wrapper-15 .cbx span:first-child:before {
          content: "";
          width: 100%;
          height: 100%;
          background: #506EEC;
          display: block;
          transform: scale(0);
          opacity: 1;
          border-radius: 50%;
          transition-delay: 0.2s;
        }

        .checkbox-wrapper-15 .cbx span:last-child {
          margin-left: 8px;
        }

        .checkbox-wrapper-15 .cbx span:last-child:after {
          content: "";
          position: absolute;
          top: 8px;
          left: 0;
          height: 1px;
          width: 100%;
          background: #B9B8C3;
          transform-origin: 0 0;
          transform: scaleX(0);
        }

        .checkbox-wrapper-15 .cbx:hover span:first-child {
          border-color: #3c53c7;
        }

        .checkbox-wrapper-15 .inp-cbx:checked+.cbx span:first-child {
          border-color: #3c53c7;
          background: #3c53c7;
          animation: check-15 0.6s ease;
        }

        .checkbox-wrapper-15 .inp-cbx:checked+.cbx span:first-child svg {
          stroke-dashoffset: 0;
        }

        .checkbox-wrapper-15 .inp-cbx:checked+.cbx span:first-child:before {
          transform: scale(2.2);
          opacity: 0;
          transition: all 0.6s ease;
        }

        .checkbox-wrapper-15 .inp-cbx:checked+.cbx span:last-child {
          color: #B9B8C3;
          transition: all 0.3s ease;
        }

        .checkbox-wrapper-15 .inp-cbx:checked+.cbx span:last-child:after {
          transform: scaleX(1);
          transition: all 0.3s ease;
        }

        @keyframes check-15 {
          50% {
            transform: scale(1.2);
          }
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-16">

        <label class="checkbox-wrapper">
          <input type="checkbox" class="checkbox-input">
          <span class="checkbox-tile">
            <span class="checkbox-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                <path
                  d="M392.8 1.2c-17-4.9-34.7 5-39.6 22l-128 448c-4.9 17 5 34.7 22 39.6s34.7-5 39.6-22l128-448c4.9-17-5-34.7-22-39.6zm80.6 120.1c-12.5 12.5-12.5 32.8 0 45.3L562.7 256l-89.4 89.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l112-112c12.5-12.5 12.5-32.8 0-45.3l-112-112c-12.5-12.5-32.8-12.5-45.3 0zm-306.7 0c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3l112 112c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256l89.4-89.4c12.5-12.5 12.5-32.8 0-45.3z" />
              </svg>
            </span>
            <span class="checkbox-label">Code</span>
          </span>
        </label>

      </div>
      <style>
        .checkbox-wrapper-16 *,
        .checkbox-wrapper-16 *:after,
        .checkbox-wrapper-16 *:before {
          box-sizing: border-box;
        }

        .checkbox-wrapper-16 .checkbox-input {
          clip: rect(0 0 0 0);
          -webkit-clip-path: inset(100%);
          clip-path: inset(100%);
          height: 1px;
          overflow: hidden;
          position: absolute;
          white-space: nowrap;
          width: 1px;
        }

        .checkbox-wrapper-16 .checkbox-input:checked+.checkbox-tile {
          border-color: #2260ff;
          box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
          color: #2260ff;
        }

        .checkbox-wrapper-16 .checkbox-input:checked+.checkbox-tile:before {
          transform: scale(1);
          opacity: 1;
          background-color: #2260ff;
          border-color: #2260ff;
        }

        .checkbox-wrapper-16 .checkbox-input:checked+.checkbox-tile .checkbox-icon,
        .checkbox-wrapper-16 .checkbox-input:checked+.checkbox-tile .checkbox-label {
          color: #2260ff;
        }

        .checkbox-wrapper-16 .checkbox-input:focus+.checkbox-tile {
          border-color: #2260ff;
          box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1), 0 0 0 4px #b5c9fc;
        }

        .checkbox-wrapper-16 .checkbox-input:focus+.checkbox-tile:before {
          transform: scale(1);
          opacity: 1;
        }

        .checkbox-wrapper-16 .checkbox-tile {
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

        .checkbox-wrapper-16 .checkbox-tile:before {
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

        .checkbox-wrapper-16 .checkbox-tile:hover {
          border-color: #2260ff;
        }

        .checkbox-wrapper-16 .checkbox-tile:hover:before {
          transform: scale(1);
          opacity: 1;
        }

        .checkbox-wrapper-16 .checkbox-icon {
          transition: 0.375s ease;
          color: #494949;
        }

        .checkbox-wrapper-16 .checkbox-icon svg {
          width: 3rem;
          height: 3rem;
        }

        .checkbox-wrapper-16 .checkbox-label {
          color: #707070;
          transition: 0.375s ease;
          text-align: center;
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-17">

        <input type="checkbox" id="switch-17"><label for="switch-17"></label>

      </div>
      <style>
        .checkbox-wrapper-17 input[type=checkbox] {
          height: 0;
          width: 0;
          visibility: hidden;
        }

        .checkbox-wrapper-17 label {
          --size: 50px;

          cursor: pointer;
          width: var(--size);
          height: calc(var(--size) / 2);
          background: grey;
          display: block;
          border-radius: 100px;
          position: relative;
        }

        .checkbox-wrapper-17 label:after {
          content: '';
          position: absolute;
          top: 6%;
          left: 2.5%;
          width: calc(50% - 5%);
          height: calc(100% - 11%);
          background: #fff;
          border-radius: 90px;
          transition: 0.3s;
        }

        .checkbox-wrapper-17 input:checked+label {
          background: #bada55;
        }

        .checkbox-wrapper-17 input:checked+label:after {
          left: calc(100% - 2.5%);
          transform: translateX(-100%);
        }

        .checkbox-wrapper-17 label:active:after {
          width: 55%;
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-18">

        <div class="round">
          <input type="checkbox" id="checkbox-18">
          <label for="checkbox-18"></label>
        </div>

      </div>
      <style>
        .checkbox-wrapper-18 .round {
          position: relative;
        }

        .checkbox-wrapper-18 .round label {
          background-color: #fff;
          border: 1px solid #ccc;
          border-radius: 50%;
          cursor: pointer;
          height: 28px;
          width: 28px;
          display: block;
        }

        .checkbox-wrapper-18 .round label:after {
          border: 2px solid #fff;
          border-top: none;
          border-right: none;
          content: "";
          height: 6px;
          left: 8px;
          opacity: 0;
          position: absolute;
          top: 9px;
          transform: rotate(-45deg);
          width: 12px;
        }

        .checkbox-wrapper-18 .round input[type="checkbox"] {
          visibility: hidden;
          display: none;
          opacity: 0;
        }

        .checkbox-wrapper-18 .round input[type="checkbox"]:checked+label {
          background-color: #66bb6a;
          border-color: #66bb6a;
        }

        .checkbox-wrapper-18 .round input[type="checkbox"]:checked+label:after {
          opacity: 1;
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-19">

        <input type="checkbox" id="cbtest-19">
        <label for="cbtest-19" class="check-box">

        </label>
      </div>
      <style>
        .checkbox-wrapper-19 {
          box-sizing: border-box;
          --background-color: #fff;
          --checkbox-height: 25px;
        }

        @-moz-keyframes dothabottomcheck-19 {
          0% {
            height: 0;
          }

          100% {
            height: calc(var(--checkbox-height) / 2);
          }
        }

        @-webkit-keyframes dothabottomcheck-19 {
          0% {
            height: 0;
          }

          100% {
            height: calc(var(--checkbox-height) / 2);
          }
        }

        @keyframes dothabottomcheck-19 {
          0% {
            height: 0;
          }

          100% {
            height: calc(var(--checkbox-height) / 2);
          }
        }

        @keyframes dothatopcheck-19 {
          0% {
            height: 0;
          }

          50% {
            height: 0;
          }

          100% {
            height: calc(var(--checkbox-height) * 1.2);
          }
        }

        @-webkit-keyframes dothatopcheck-19 {
          0% {
            height: 0;
          }

          50% {
            height: 0;
          }

          100% {
            height: calc(var(--checkbox-height) * 1.2);
          }
        }

        @-moz-keyframes dothatopcheck-19 {
          0% {
            height: 0;
          }

          50% {
            height: 0;
          }

          100% {
            height: calc(var(--checkbox-height) * 1.2);
          }
        }

        .checkbox-wrapper-19 input[type=checkbox] {
          display: none;
        }

        .checkbox-wrapper-19 .check-box {
          height: var(--checkbox-height);
          width: var(--checkbox-height);
          background-color: transparent;
          border: calc(var(--checkbox-height) * .1) solid #000;
          border-radius: 5px;
          position: relative;
          display: inline-block;
          -moz-box-sizing: border-box;
          -webkit-box-sizing: border-box;
          box-sizing: border-box;
          -moz-transition: border-color ease 0.2s;
          -o-transition: border-color ease 0.2s;
          -webkit-transition: border-color ease 0.2s;
          transition: border-color ease 0.2s;
          cursor: pointer;
        }

        .checkbox-wrapper-19 .check-box::before,
        .checkbox-wrapper-19 .check-box::after {
          -moz-box-sizing: border-box;
          -webkit-box-sizing: border-box;
          box-sizing: border-box;
          position: absolute;
          height: 0;
          width: calc(var(--checkbox-height) * .2);
          background-color: #34b93d;
          display: inline-block;
          -moz-transform-origin: left top;
          -ms-transform-origin: left top;
          -o-transform-origin: left top;
          -webkit-transform-origin: left top;
          transform-origin: left top;
          border-radius: 5px;
          content: " ";
          -webkit-transition: opacity ease 0.5;
          -moz-transition: opacity ease 0.5;
          transition: opacity ease 0.5;
        }

        .checkbox-wrapper-19 .check-box::before {
          top: calc(var(--checkbox-height) * .72);
          left: calc(var(--checkbox-height) * .41);
          box-shadow: 0 0 0 calc(var(--checkbox-height) * .05) var(--background-color);
          -moz-transform: rotate(-135deg);
          -ms-transform: rotate(-135deg);
          -o-transform: rotate(-135deg);
          -webkit-transform: rotate(-135deg);
          transform: rotate(-135deg);
        }

        .checkbox-wrapper-19 .check-box::after {
          top: calc(var(--checkbox-height) * .37);
          left: calc(var(--checkbox-height) * .05);
          -moz-transform: rotate(-45deg);
          -ms-transform: rotate(-45deg);
          -o-transform: rotate(-45deg);
          -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
        }

        .checkbox-wrapper-19 input[type=checkbox]:checked+.check-box,
        .checkbox-wrapper-19 .check-box.checked {
          border-color: #34b93d;
        }

        .checkbox-wrapper-19 input[type=checkbox]:checked+.check-box::after,
        .checkbox-wrapper-19 .check-box.checked::after {
          height: calc(var(--checkbox-height) / 2);
          -moz-animation: dothabottomcheck-19 0.2s ease 0s forwards;
          -o-animation: dothabottomcheck-19 0.2s ease 0s forwards;
          -webkit-animation: dothabottomcheck-19 0.2s ease 0s forwards;
          animation: dothabottomcheck-19 0.2s ease 0s forwards;
        }

        .checkbox-wrapper-19 input[type=checkbox]:checked+.check-box::before,
        .checkbox-wrapper-19 .check-box.checked::before {
          height: calc(var(--checkbox-height) * 1.2);
          -moz-animation: dothatopcheck-19 0.4s ease 0s forwards;
          -o-animation: dothatopcheck-19 0.4s ease 0s forwards;
          -webkit-animation: dothatopcheck-19 0.4s ease 0s forwards;
          animation: dothatopcheck-19 0.4s ease 0s forwards;
        }
      </style>

    </li>


    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-21">

        <label class="control control--checkbox">
          Checkbox
          <input type="checkbox">
          <div class="control__indicator"></div>
        </label>

      </div>
      <style>
        .checkbox-wrapper-21 .control {
          display: block;
          position: relative;
          padding-left: 30px;
          cursor: pointer;
          font-size: 18px;
        }

        .checkbox-wrapper-21 .control input {
          position: absolute;
          z-index: -1;
          opacity: 0;
        }

        .checkbox-wrapper-21 .control__indicator {
          position: absolute;
          top: 2px;
          left: 0;
          height: 20px;
          width: 20px;
          background: #e6e6e6;
        }

        .checkbox-wrapper-21 .control:hover input~.control__indicator,
        .checkbox-wrapper-21 .control input:focus~.control__indicator {
          background: #ccc;
        }

        .checkbox-wrapper-21 .control input:checked~.control__indicator {
          background: #2aa1c0;
        }

        .checkbox-wrapper-21 .control:hover input:not([disabled]):checked~.control__indicator,
        .checkbox-wrapper-21 .control input:checked:focus~.control__indicator {
          background: #0e647d;
        }

        .checkbox-wrapper-21 .control input:disabled~.control__indicator {
          background: #e6e6e6;
          opacity: 0.6;
          pointer-events: none;
        }

        .checkbox-wrapper-21 .control__indicator:after {
          content: '';
          position: absolute;
          display: none;
        }

        .checkbox-wrapper-21 .control input:checked~.control__indicator:after {
          display: block;
        }

        .checkbox-wrapper-21 .control--checkbox .control__indicator:after {
          left: 8px;
          top: 4px;
          width: 3px;
          height: 8px;
          border: solid #fff;
          border-width: 0 2px 2px 0;
          transform: rotate(45deg);
        }

        .checkbox-wrapper-21 .control--checkbox input:disabled~.control__indicator:after {
          border-color: #7b7b7b;
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-22">

        <label class="switch" for="checkbox">
          <input type="checkbox" id="checkbox">
          <div class="slider round"></div>
        </label>

      </div>
      <style>
        .checkbox-wrapper-22 .switch {
          display: inline-block;
          height: 34px;
          position: relative;
          width: 60px;
        }

        .checkbox-wrapper-22 .switch input {
          display: none;
        }

        .checkbox-wrapper-22 .slider {
          background-color: #ccc;
          bottom: 0;
          cursor: pointer;
          left: 0;
          position: absolute;
          right: 0;
          top: 0;
          transition: .4s;
        }

        .checkbox-wrapper-22 .slider:before {
          background-color: #fff;
          bottom: 4px;
          content: "";
          height: 26px;
          left: 4px;
          position: absolute;
          transition: .4s;
          width: 26px;
        }

        .checkbox-wrapper-22 input:checked+.slider {
          background-color: #66bb6a;
        }

        .checkbox-wrapper-22 input:checked+.slider:before {
          transform: translateX(26px);
        }

        .checkbox-wrapper-22 .slider.round {
          border-radius: 34px;
        }

        .checkbox-wrapper-22 .slider.round:before {
          border-radius: 50%;
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-23">

        <input type="checkbox" id="check-23">
        <label for="check-23" style="--size: 30px">
          <svg viewBox="0,0,50,50">
            <path d="M5 30 L 20 45 L 45 5"></path>
          </svg>
        </label>

      </div>
      <style>
        .checkbox-wrapper-23 *,
        .checkbox-wrapper-23 *:after,
        .checkbox-wrapper-23 *:before {
          box-sizing: border-box;
        }

        .checkbox-wrapper-23 input {
          position: absolute;
          opacity: 0;
        }

        .checkbox-wrapper-23 input:checked+label svg path {
          stroke-dashoffset: 0;
        }

        .checkbox-wrapper-23 input:focus+label {
          transform: scale(1.03);
        }

        .checkbox-wrapper-23 input+label {
          display: block;
          border: 2px solid #333;
          width: var(--size);
          height: var(--size);
          border-radius: 6px;
          cursor: pointer;
          transition: all .2s ease;
        }

        .checkbox-wrapper-23 input+label:active {
          transform: scale(1.05);
          border-radius: 12px;
        }

        .checkbox-wrapper-23 input+label svg {
          pointer-events: none;
          padding: 5%;
        }

        .checkbox-wrapper-23 input+label svg path {
          fill: none;
          stroke: #333;
          stroke-width: 4px;
          stroke-linecap: round;
          stroke-linejoin: round;
          stroke-dasharray: 100;
          stroke-dashoffset: 101;
          transition: all 250ms cubic-bezier(1, 0, .37, .91);
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-24">

        <input type="checkbox" id="check-24" name="check" value="">
        <label for="check-24">
          <span><!-- This span is needed to create the "checkbox" element --></span>Checkbox
        </label>

      </div>
      <style>
        .checkbox-wrapper-24 .checkbox {
          display: table-cell;
          width: 100%;
          height: 100%;
          vertical-align: middle;
          text-align: center;
        }

        .checkbox-wrapper-24 label {
          display: inline-block;
          color: #333;
          cursor: pointer;
          position: relative;
        }

        .checkbox-wrapper-24 label span {
          display: inline-block;
          position: relative;
          background-color: transparent;
          width: 25px;
          height: 25px;
          transform-origin: center;
          border: 2px solid #333;
          border-radius: 50%;
          vertical-align: middle;
          margin-right: 10px;
          transition: background-color 150ms 200ms, transform 350ms cubic-bezier(0.78, -1.22, 0.17, 1.89);
        }

        .checkbox-wrapper-24 label span:before {
          content: "";
          width: 0px;
          height: 2px;
          border-radius: 2px;
          background: #333;
          position: absolute;
          transform: rotate(45deg);
          top: 13px;
          left: 9px;
          transition: width 50ms ease 50ms;
          transform-origin: 0% 0%;
        }

        .checkbox-wrapper-24 label span:after {
          content: "";
          width: 0;
          height: 2px;
          border-radius: 2px;
          background: #333;
          position: absolute;
          transform: rotate(305deg);
          top: 16px;
          left: 10px;
          transition: width 50ms ease;
          transform-origin: 0% 0%;
        }

        .checkbox-wrapper-24 label:hover span:before {
          width: 5px;
          transition: width 100ms ease;
        }

        .checkbox-wrapper-24 label:hover span:after {
          width: 10px;
          transition: width 150ms ease 100ms;
        }

        .checkbox-wrapper-24 input[type=checkbox] {
          display: none;
        }

        .checkbox-wrapper-24 input[type=checkbox]:checked+label span {
          background-color: #333;
          transform: scale(1.25);
        }

        .checkbox-wrapper-24 input[type=checkbox]:checked+label span:after {
          width: 10px;
          background: #fff;
          transition: width 150ms ease 100ms;
        }

        .checkbox-wrapper-24 input[type=checkbox]:checked+label span:before {
          width: 5px;
          background: #fff;
          transition: width 150ms ease 100ms;
        }

        .checkbox-wrapper-24 input[type=checkbox]:checked+label:hover span {
          background-color: #333;
          transform: scale(1.25);
        }

        .checkbox-wrapper-24 input[type=checkbox]:checked+label:hover span:after {
          width: 10px;
          background: #fff;
          transition: width 150ms ease 100ms;
        }

        .checkbox-wrapper-24 input[type=checkbox]:checked+label:hover span:before {
          width: 5px;
          background: #fff;
          transition: width 150ms ease 100ms;
        }
      </style>

    </li>



    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-26">

        <input type="checkbox" id="_checkbox-26">
        <label for="_checkbox-26">
          <div class="tick_mark"></div>
        </label>

      </div>
      <style>
        .checkbox-wrapper-26 * {
          -webkit-tap-highlight-color: transparent;
          outline: none;
        }

        .checkbox-wrapper-26 input[type="checkbox"] {
          display: none;
        }

        .checkbox-wrapper-26 label {
          --size: 50px;
          --shadow: calc(var(--size) * .07) calc(var(--size) * .1);

          position: relative;
          display: block;
          width: var(--size);
          height: var(--size);
          margin: 0 auto;
          background-color: #f72414;
          border-radius: 50%;
          box-shadow: 0 var(--shadow) #ffbeb8;
          cursor: pointer;
          transition: 0.2s ease transform, 0.2s ease background-color,
            0.2s ease box-shadow;
          overflow: hidden;
          z-index: 1;
        }

        .checkbox-wrapper-26 label:before {
          content: "";
          position: absolute;
          top: 50%;
          right: 0;
          left: 0;
          width: calc(var(--size) * .7);
          height: calc(var(--size) * .7);
          margin: 0 auto;
          background-color: #fff;
          transform: translateY(-50%);
          border-radius: 50%;
          box-shadow: inset 0 var(--shadow) #ffbeb8;
          transition: 0.2s ease width, 0.2s ease height;
        }

        .checkbox-wrapper-26 label:hover:before {
          width: calc(var(--size) * .55);
          height: calc(var(--size) * .55);
          box-shadow: inset 0 var(--shadow) #ff9d96;
        }

        .checkbox-wrapper-26 label:active {
          transform: scale(0.9);
        }

        .checkbox-wrapper-26 .tick_mark {
          position: absolute;
          top: -1px;
          right: 0;
          left: calc(var(--size) * -.05);
          width: calc(var(--size) * .6);
          height: calc(var(--size) * .6);
          margin: 0 auto;
          margin-left: calc(var(--size) * .14);
          transform: rotateZ(-40deg);
        }

        .checkbox-wrapper-26 .tick_mark:before,
        .checkbox-wrapper-26 .tick_mark:after {
          content: "";
          position: absolute;
          background-color: #fff;
          border-radius: 2px;
          opacity: 0;
          transition: 0.2s ease transform, 0.2s ease opacity;
        }

        .checkbox-wrapper-26 .tick_mark:before {
          left: 0;
          bottom: 0;
          width: calc(var(--size) * .1);
          height: calc(var(--size) * .3);
          box-shadow: -2px 0 5px rgba(0, 0, 0, 0.23);
          transform: translateY(calc(var(--size) * -.68));
        }

        .checkbox-wrapper-26 .tick_mark:after {
          left: 0;
          bottom: 0;
          width: 100%;
          height: calc(var(--size) * .1);
          box-shadow: 0 3px 5px rgba(0, 0, 0, 0.23);
          transform: translateX(calc(var(--size) * .78));
        }

        .checkbox-wrapper-26 input[type="checkbox"]:checked+label {
          background-color: #07d410;
          box-shadow: 0 var(--shadow) #92ff97;
        }

        .checkbox-wrapper-26 input[type="checkbox"]:checked+label:before {
          width: 0;
          height: 0;
        }

        .checkbox-wrapper-26 input[type="checkbox"]:checked+label .tick_mark:before,
        .checkbox-wrapper-26 input[type="checkbox"]:checked+label .tick_mark:after {
          transform: translate(0);
          opacity: 1;
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-27">

        <label class="checkbox">
          <input type="checkbox">
          <span class="checkbox__icon"></span>
          Checkbox
        </label>

      </div>
      <style>
        .checkbox-wrapper-27 .checkbox {
          cursor: pointer;
          -webkit-tap-highlight-color: transparent;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }

        .checkbox-wrapper-27 .checkbox>input[type="checkbox"] {
          position: absolute;
          opacity: 0;
          z-index: -1;
        }

        .checkbox-wrapper-27 .checkbox__icon {
          display: inline-block;
          color: #999;
          vertical-align: middle;
          margin-right: 5px;
        }

        .checkbox-wrapper-27 input[type="checkbox"]:checked~.checkbox__icon {
          color: #2A7DEA;
        }

        .checkbox-wrapper-27 .checkbox__icon:before {
          font-family: "icons-27";
          speak: none;
          font-style: normal;
          font-weight: normal;
          font-variant: normal;
          text-transform: none;
          /* Better Font Rendering =========== */
          -webkit-font-smoothing: antialiased;
          -moz-osx-font-smoothing: grayscale;
        }

        .checkbox-wrapper-27 .icon--check:before,
        .checkbox-wrapper-27 input[type="checkbox"]:checked~.checkbox__icon:before {
          content: "\e601";
        }

        .checkbox-wrapper-27 .icon--check-empty:before,
        .checkbox-wrapper-27 .checkbox__icon:before {
          content: "\e600";
        }

        @font-face {
          font-family: "icons-27";
          font-weight: normal;
          font-style: normal;
          src: url("data:application/x-font-woff;charset=utf-8;base64,d09GRk9UVE8AAAR4AAoAAAAABDAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABDRkYgAAAA9AAAAPgAAAD4fZUAVE9TLzIAAAHsAAAAYAAAAGAIIvy3Y21hcAAAAkwAAABMAAAATBpVzFhnYXNwAAACmAAAAAgAAAAIAAAAEGhlYWQAAAKgAAAANgAAADYAeswzaGhlYQAAAtgAAAAkAAAAJAPiAedobXR4AAAC/AAAABgAAAAYBQAAAG1heHAAAAMUAAAABgAAAAYABlAAbmFtZQAAAxwAAAE5AAABOUQYtNZwb3N0AAAEWAAAACAAAAAgAAMAAAEABAQAAQEBCGljb21vb24AAQIAAQA6+BwC+BsD+BgEHgoAGVP/i4seCgAZU/+LiwwHi2v4lPh0BR0AAAB8Dx0AAACBER0AAAAJHQAAAO8SAAcBAQgPERMWGyBpY29tb29uaWNvbW9vbnUwdTF1MjB1RTYwMHVFNjAxAAACAYkABAAGAQEEBwoNL2X8lA78lA78lA77lA6L+HQVi/yU+JSLi/iU/JSLBd83Fffsi4v77Pvsi4v37AUOi/h0FYv8lPiUi4v33zc3i/s3++yLi/fs9zeL398F9wCFFftN+05JzUdI9xr7GveR95FHzwUO+JQU+JQViwwKAAMCAAGQAAUAAAFMAWYAAABHAUwBZgAAAPUAGQCEAAAAAAAAAAAAAAAAAAAAARAAAAAAAAAAAAAAAAAAAAAAQAAA5gEB4P/g/+AB4AAgAAAAAQAAAAAAAAAAAAAAIAAAAAAAAgAAAAMAAAAUAAMAAQAAABQABAA4AAAACgAIAAIAAgABACDmAf/9//8AAAAAACDmAP/9//8AAf/jGgQAAwABAAAAAAAAAAAAAAABAAH//wAPAAEAAAAAAACkYCfgXw889QALAgAAAAAAz65FuwAAAADPrkW7AAD/4AIAAeAAAAAIAAIAAAAAAAAAAQAAAeD/4AAAAgAAAAAAAgAAAQAAAAAAAAAAAAAAAAAAAAYAAAAAAAAAAAAAAAABAAAAAgAAAAIAAAAAAFAAAAYAAAAAAA4ArgABAAAAAAABAA4AAAABAAAAAAACAA4ARwABAAAAAAADAA4AJAABAAAAAAAEAA4AVQABAAAAAAAFABYADgABAAAAAAAGAAcAMgABAAAAAAAKACgAYwADAAEECQABAA4AAAADAAEECQACAA4ARwADAAEECQADAA4AJAADAAEECQAEAA4AVQADAAEECQAFABYADgADAAEECQAGAA4AOQADAAEECQAKACgAYwBpAGMAbwBtAG8AbwBuAFYAZQByAHMAaQBvAG4AIAAxAC4AMABpAGMAbwBtAG8AbwBuaWNvbW9vbgBpAGMAbwBtAG8AbwBuAFIAZQBnAHUAbABhAHIAaQBjAG8AbQBvAG8AbgBHAGUAbgBlAHIAYQB0AGUAZAAgAGIAeQAgAEkAYwBvAE0AbwBvAG4AAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA==") format("woff");
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-28">

        <input id="tmp-28" type="checkbox" class="promoted-input-checkbox">
        <svg>
          <use xlink:href="#checkmark-28"></use>
        </svg>
        <label for="tmp-28">
          Checkbox
        </label>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
          <symbol id="checkmark-28" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-miterlimit="10" fill="none" d="M22.9 3.7l-15.2 16.6-6.6-7.1">
            </path>
          </symbol>
        </svg>

      </div>
      <style>
        .checkbox-wrapper-28 {
          --size: 25px;
          position: relative;
        }

        .checkbox-wrapper-28 *,
        .checkbox-wrapper-28 *:before,
        .checkbox-wrapper-28 *:after {
          box-sizing: border-box;
        }

        .checkbox-wrapper-28 .promoted-input-checkbox {
          border: 0;
          clip: rect(0 0 0 0);
          height: 1px;
          margin: -1px;
          overflow: hidden;
          padding: 0;
          position: absolute;
          width: 1px;
        }

        .checkbox-wrapper-28 input:checked~svg {
          height: calc(var(--size) * 0.6);
          -webkit-animation: draw-checkbox-28 ease-in-out 0.2s forwards;
          animation: draw-checkbox-28 ease-in-out 0.2s forwards;
        }

        .checkbox-wrapper-28 label:active::after {
          background-color: #e6e6e6;
        }

        .checkbox-wrapper-28 label {
          color: #0080d3;
          line-height: var(--size);
          cursor: pointer;
          position: relative;
        }

        .checkbox-wrapper-28 label:after {
          content: "";
          height: var(--size);
          width: var(--size);
          margin-right: 8px;
          float: left;
          border: 2px solid #0080d3;
          border-radius: 3px;
          transition: 0.15s all ease-out;
        }

        .checkbox-wrapper-28 svg {
          stroke: #0080d3;
          stroke-width: 3px;
          height: 0;
          width: calc(var(--size) * 0.6);
          position: absolute;
          left: calc(var(--size) * 0.21);
          top: calc(var(--size) * 0.2);
          stroke-dasharray: 33;
        }

        @-webkit-keyframes draw-checkbox-28 {
          0% {
            stroke-dashoffset: 33;
          }

          100% {
            stroke-dashoffset: 0;
          }
        }

        @keyframes draw-checkbox-28 {
          0% {
            stroke-dashoffset: 33;
          }

          100% {
            stroke-dashoffset: 0;
          }
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-29">

        <label class="checkbox">
          <input type="checkbox" class="checkbox__input">
          <span class="checkbox__label"></span>
          Checkbox
        </label>

      </div>
      <style>
        .checkbox-wrapper-29 {
          --size: 1rem;
          --background: #fff;
          font-size: var(--size);
        }

        .checkbox-wrapper-29 *,
        .checkbox-wrapper-29 *::after,
        .checkbox-wrapper-29 *::before {
          box-sizing: border-box;
        }

        .checkbox-wrapper-29 input[type="checkbox"] {
          visibility: hidden;
          display: none;
        }

        .checkbox-wrapper-29 .checkbox__label {
          width: var(--size);
        }

        .checkbox-wrapper-29 .checkbox__label:before {
          content: ' ';
          display: block;
          height: var(--size);
          width: var(--size);
          position: absolute;
          top: calc(var(--size) * 0.125);
          left: 0;
          background: var(--background);
        }

        .checkbox-wrapper-29 .checkbox__label:after {
          content: ' ';
          display: block;
          height: var(--size);
          width: var(--size);
          border: calc(var(--size) * .14) solid #000;
          transition: 200ms;
          position: absolute;
          top: calc(var(--size) * 0.125);
          left: 0;
          background: var(--background);
        }

        .checkbox-wrapper-29 .checkbox__label:after {
          transition: 100ms ease-in-out;
        }

        .checkbox-wrapper-29 .checkbox__input:checked~.checkbox__label:after {
          border-top-style: none;
          border-right-style: none;
          -ms-transform: rotate(-45deg);
          /* IE9 */
          transform: rotate(-45deg);
          height: calc(var(--size) * .5);
          border-color: green;
        }

        .checkbox-wrapper-29 .checkbox {
          position: relative;
          display: flex;
          cursor: pointer;
          /* Mobile Safari: */
          -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        .checkbox-wrapper-29 .checkbox__label:after:hover,
        .checkbox-wrapper-29 .checkbox__label:after:active {
          border-color: green;
        }

        .checkbox-wrapper-29 .checkbox__label {
          margin-right: calc(var(--size) * 0.45);
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-30">

        <span class="checkbox">
          <input type="checkbox">
          <svg>
            <use xlink:href="#checkbox-30" class="checkbox"></use>
          </svg>
        </span>
        <svg xmlns="http://www.w3.org/2000/svg" style="display:none">
          <symbol id="checkbox-30" viewBox="0 0 22 22">
            <path fill="none" stroke="currentColor"
              d="M5.5,11.3L9,14.8L20.2,3.3l0,0c-0.5-1-1.5-1.8-2.7-1.8h-13c-1.7,0-3,1.3-3,3v13c0,1.7,1.3,3,3,3h13 c1.7,0,3-1.3,3-3v-13c0-0.4-0.1-0.8-0.3-1.2">
            </path>
          </symbol>
        </svg>

      </div>
      <style>
        .checkbox-wrapper-30 .checkbox {
          --bg: #fff;
          --brdr: #d1d6ee;
          --brdr-actv: #1e2235;
          --brdr-hovr: #bbc1e1;
          --dur: calc((var(--size, 2)/2) * 0.6s);
          display: inline-block;
          width: calc(var(--size, 1) * 22px);
          position: relative;
        }

        .checkbox-wrapper-30 .checkbox:after {
          content: "";
          width: 100%;
          padding-top: 100%;
          display: block;
        }

        .checkbox-wrapper-30 .checkbox>* {
          position: absolute;
        }

        .checkbox-wrapper-30 .checkbox input {
          -webkit-appearance: none;
          -moz-appearance: none;
          -webkit-tap-highlight-color: transparent;
          cursor: pointer;
          background-color: var(--bg);
          border-radius: calc(var(--size, 1) * 4px);
          border: calc(var(--newBrdr, var(--size, 1)) * 1px) solid;
          color: var(--newBrdrClr, var(--brdr));
          outline: none;
          margin: 0;
          padding: 0;
          transition: all calc(var(--dur) / 3) linear;
        }

        .checkbox-wrapper-30 .checkbox input:hover,
        .checkbox-wrapper-30 .checkbox input:checked {
          --newBrdr: calc(var(--size, 1) * 2);
        }

        .checkbox-wrapper-30 .checkbox input:hover {
          --newBrdrClr: var(--brdr-hovr);
        }

        .checkbox-wrapper-30 .checkbox input:checked {
          --newBrdrClr: var(--brdr-actv);
          transition-delay: calc(var(--dur) /1.3);
        }

        .checkbox-wrapper-30 .checkbox input:checked+svg {
          --dashArray: 16 93;
          --dashOffset: 109;
        }

        .checkbox-wrapper-30 .checkbox svg {
          fill: none;
          left: 0;
          pointer-events: none;
          stroke: var(--stroke, var(--border-active));
          stroke-dasharray: var(--dashArray, 93);
          stroke-dashoffset: var(--dashOffset, 94);
          stroke-linecap: round;
          stroke-linejoin: round;
          stroke-width: 2px;
          top: 0;
          transition: stroke-dasharray var(--dur), stroke-dashoffset var(--dur);
        }

        .checkbox-wrapper-30 .checkbox svg,
        .checkbox-wrapper-30 .checkbox input {
          display: block;
          height: 100%;
          width: 100%;
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-31">

        <input type="checkbox">
        <svg viewBox="0 0 35.6 35.6">
          <circle class="background" cx="17.8" cy="17.8" r="17.8"></circle>
          <circle class="stroke" cx="17.8" cy="17.8" r="14.37"></circle>
          <polyline class="check" points="11.78 18.12 15.55 22.23 25.17 12.87"></polyline>
        </svg>

      </div>
      <style>
        .checkbox-wrapper-31:hover .check {
          stroke-dashoffset: 0;
        }

        .checkbox-wrapper-31 {
          position: relative;
          display: inline-block;
          width: 40px;
          height: 40px;
        }

        .checkbox-wrapper-31 .background {
          fill: #ccc;
          transition: ease all 0.6s;
          -webkit-transition: ease all 0.6s;
        }

        .checkbox-wrapper-31 .stroke {
          fill: none;
          stroke: #fff;
          stroke-miterlimit: 10;
          stroke-width: 2px;
          stroke-dashoffset: 100;
          stroke-dasharray: 100;
          transition: ease all 0.6s;
          -webkit-transition: ease all 0.6s;
        }

        .checkbox-wrapper-31 .check {
          fill: none;
          stroke: #fff;
          stroke-linecap: round;
          stroke-linejoin: round;
          stroke-width: 2px;
          stroke-dashoffset: 22;
          stroke-dasharray: 22;
          transition: ease all 0.6s;
          -webkit-transition: ease all 0.6s;
        }

        .checkbox-wrapper-31 input[type=checkbox] {
          position: absolute;
          width: 100%;
          height: 100%;
          left: 0;
          top: 0;
          margin: 0;
          opacity: 0;
          -appearance: none;
          -webkit-appearance: none;
        }

        .checkbox-wrapper-31 input[type=checkbox]:hover {
          cursor: pointer;
        }

        .checkbox-wrapper-31 input[type=checkbox]:checked+svg .background {
          fill: #6cbe45;
        }

        .checkbox-wrapper-31 input[type=checkbox]:checked+svg .stroke {
          stroke-dashoffset: 0;
        }

        .checkbox-wrapper-31 input[type=checkbox]:checked+svg .check {
          stroke-dashoffset: 0;
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-32">

        <input type="checkbox" name="checkbox-32" id="checkbox-32">
        <label for="checkbox-32">
          Checkbox
        </label>
        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
          <path d="M 10 10 L 90 90" stroke="#000" stroke-dasharray="113" stroke-dashoffset="113"></path>
          <path d="M 90 10 L 10 90" stroke="#000" stroke-dasharray="113" stroke-dashoffset="113"></path>
        </svg>

      </div>
      <style>
        .checkbox-wrapper-32 {
          --size: 20px;
          --border-size: 2px;

          position: relative;
        }

        .checkbox-wrapper-32 *,
        .checkbox-wrapper-32 *::after,
        .checkbox-wrapper-32 *::before {
          box-sizing: border-box;
        }

        .checkbox-wrapper-32 input[type="checkbox"] {
          display: inline-block;
          vertical-align: middle;
          opacity: 0;
        }

        .checkbox-wrapper-32 input[type="checkbox"],
        .checkbox-wrapper-32 label::before {
          width: var(--size);
          height: var(--size);
          position: absolute;
          left: 0;
          top: 50%;
          transform: translateY(-50%);
        }

        .checkbox-wrapper-32 label {
          display: inline-block;
          position: relative;
          padding: 0 0 0 calc(var(--size) + 7px);
        }

        .checkbox-wrapper-32 label::before {
          content: '';
          border: var(--border-size) solid #000;
          opacity: 0.7;
          transition: opacity 0.3s;
        }

        .checkbox-wrapper-32 input[type="checkbox"]:checked+label::before {
          opacity: 1;
        }

        .checkbox-wrapper-32 svg {
          position: absolute;
          top: calc(50% + var(--border-size));
          left: var(--border-size);
          width: calc(var(--size) - (var(--border-size) * 2));
          height: calc(var(--size) - (var(--border-size) * 2));
          margin-top: calc(var(--size) / -2);
          pointer-events: none;
        }

        .checkbox-wrapper-32 svg path {
          stroke-width: 0;
          fill: none;
          transition: stroke-dashoffset 0.2s ease-in 0s;
        }

        .checkbox-wrapper-32 svg path+path {
          transition: stroke-dashoffset 0.2s ease-out 0.2s;
        }

        .checkbox-wrapper-32 input[type="checkbox"]:checked~svg path {
          stroke-dashoffset: 0;
          stroke-width: calc(var(--size) / 2);
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-33">

        <label class="checkbox">
          <input class="checkbox__trigger visuallyhidden" type="checkbox">
          <span class="checkbox__symbol">
            <svg aria-hidden="true" class="icon-checkbox" width="28px" height="28px" viewBox="0 0 28 28" version="1"
              xmlns="http://www.w3.org/2000/svg">
              <path d="M4 14l8 7L24 7"></path>
            </svg>
          </span>
          <p class="checkbox__textwrapper">Checkbox</p>
        </label>

      </div>
      <style>
        .checkbox-wrapper-33 {
          --s-xsmall: 0.625em;
          --s-small: 1.2em;
          --border-width: 1px;
          --c-primary: #5F11E8;
          --c-primary-20-percent-opacity: rgb(95 17 232 / 20%);
          --c-primary-10-percent-opacity: rgb(95 17 232 / 10%);
          --t-base: 0.4s;
          --t-fast: 0.2s;
          --e-in: ease-in;
          --e-out: cubic-bezier(.11, .29, .18, .98);
        }

        .checkbox-wrapper-33 .visuallyhidden {
          border: 0;
          clip: rect(0 0 0 0);
          height: 1px;
          margin: -1px;
          overflow: hidden;
          padding: 0;
          position: absolute;
          width: 1px;
        }

        .checkbox-wrapper-33 .checkbox {
          display: flex;
          align-items: center;
          justify-content: flex-start;
        }

        .checkbox-wrapper-33 .checkbox+.checkbox {
          margin-top: var(--s-small);
        }

        .checkbox-wrapper-33 .checkbox__symbol {
          display: inline-block;
          display: flex;
          margin-right: calc(var(--s-small) * 0.7);
          border: var(--border-width) solid var(--c-primary);
          position: relative;
          border-radius: 0.1em;
          width: 1.5em;
          height: 1.5em;
          transition: box-shadow var(--t-base) var(--e-out), background-color var(--t-base);
          box-shadow: 0 0 0 0 var(--c-primary-10-percent-opacity);
        }

        .checkbox-wrapper-33 .checkbox__symbol:after {
          content: "";
          position: absolute;
          top: 0.5em;
          left: 0.5em;
          width: 0.25em;
          height: 0.25em;
          background-color: var(--c-primary-20-percent-opacity);
          opacity: 0;
          border-radius: 3em;
          transform: scale(1);
          transform-origin: 50% 50%;
        }

        .checkbox-wrapper-33 .checkbox .icon-checkbox {
          width: 1em;
          height: 1em;
          margin: auto;
          fill: none;
          stroke-width: 3;
          stroke: currentColor;
          stroke-linecap: round;
          stroke-linejoin: round;
          stroke-miterlimit: 10;
          color: var(--c-primary);
          display: inline-block;
        }

        .checkbox-wrapper-33 .checkbox .icon-checkbox path {
          transition: stroke-dashoffset var(--t-fast) var(--e-in);
          stroke-dasharray: 30px, 31px;
          stroke-dashoffset: 31px;
        }

        .checkbox-wrapper-33 .checkbox__textwrapper {
          margin: 0;
        }

        .checkbox-wrapper-33 .checkbox__trigger:checked+.checkbox__symbol:after {
          -webkit-animation: ripple-33 1.5s var(--e-out);
          animation: ripple-33 1.5s var(--e-out);
        }

        .checkbox-wrapper-33 .checkbox__trigger:checked+.checkbox__symbol .icon-checkbox path {
          transition: stroke-dashoffset var(--t-base) var(--e-out);
          stroke-dashoffset: 0px;
        }

        .checkbox-wrapper-33 .checkbox__trigger:focus+.checkbox__symbol {
          box-shadow: 0 0 0 0.25em var(--c-primary-20-percent-opacity);
        }

        @-webkit-keyframes ripple-33 {
          from {
            transform: scale(0);
            opacity: 1;
          }

          to {
            opacity: 0;
            transform: scale(20);
          }
        }

        @keyframes ripple-33 {
          from {
            transform: scale(0);
            opacity: 1;
          }

          to {
            opacity: 0;
            transform: scale(20);
          }
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-34">

        <input class="tgl tgl-ios" id="toggle-34" type="checkbox">
        <label class="tgl-btn" for="toggle-34"></label>

      </div>
      <style>
        .checkbox-wrapper-34 {
          --blue: #0D7EFF;
          --g08: #E1E5EB;
          --g04: #848ea1;
        }

        .checkbox-wrapper-34 .tgl {
          display: none;
        }

        .checkbox-wrapper-34 .tgl,
        .checkbox-wrapper-34 .tgl:after,
        .checkbox-wrapper-34 .tgl:before,
        .checkbox-wrapper-34 .tgl *,
        .checkbox-wrapper-34 .tgl *:after,
        .checkbox-wrapper-34 .tgl *:before,
        .checkbox-wrapper-34 .tgl+.tgl-btn {
          box-sizing: border-box;
        }

        .checkbox-wrapper-34 .tgl::selection,
        .checkbox-wrapper-34 .tgl:after::selection,
        .checkbox-wrapper-34 .tgl:before::selection,
        .checkbox-wrapper-34 .tgl *::selection,
        .checkbox-wrapper-34 .tgl *:after::selection,
        .checkbox-wrapper-34 .tgl *:before::selection,
        .checkbox-wrapper-34 .tgl+.tgl-btn::selection {
          background: none;
        }

        .checkbox-wrapper-34 .tgl+.tgl-btn {
          outline: 0;
          display: block;
          width: 57px;
          height: 27px;
          position: relative;
          cursor: pointer;
          user-select: none;
          font-size: 12px;
          font-weight: 400;
          color: #fff;
        }

        .checkbox-wrapper-34 .tgl+.tgl-btn:after,
        .checkbox-wrapper-34 .tgl+.tgl-btn:before {
          position: relative;
          display: block;
          content: "";
          width: 44%;
          height: 100%;
        }

        .checkbox-wrapper-34 .tgl+.tgl-btn:after {
          left: 0;
        }

        .checkbox-wrapper-34 .tgl+.tgl-btn:before {
          display: inline;
          position: absolute;
          top: 7px;
        }

        .checkbox-wrapper-34 .tgl:checked+.tgl-btn:after {
          left: 56.5%;
        }

        .checkbox-wrapper-34 .tgl-ios+.tgl-btn {
          background: var(--g08);
          border-radius: 20rem;
          padding: 2px;
          transition: all 0.4s ease;
          box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.1);
        }

        .checkbox-wrapper-34 .tgl-ios+.tgl-btn:after {
          border-radius: 2em;
          background: #fff;
          transition: left 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275), padding 0.3s ease, margin 0.3s ease;
          box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2);
        }

        .checkbox-wrapper-34 .tgl-ios+.tgl-btn:before {
          content: "No";
          left: 28px;
          color: var(--g04);
          transition: left 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .checkbox-wrapper-34 .tgl-ios+.tgl-btn:active {
          box-shadow: inset 0 0 0 30px rgba(0, 0, 0, 0.1);
        }

        .checkbox-wrapper-34 .tgl-ios+.tgl-btn:active:after {
          padding-right: 0.4em;
        }

        .checkbox-wrapper-34 .tgl-ios:checked+.tgl-btn {
          background: var(--blue);
        }

        .checkbox-wrapper-34 .tgl-ios:checked+.tgl-btn:active {
          box-shadow: inset 0 0 0 30px rgba(0, 0, 0, 0.1);
        }

        .checkbox-wrapper-34 .tgl-ios:checked+.tgl-btn:active:after {
          margin-left: -0.4em;
        }

        .checkbox-wrapper-34 .tgl-ios:checked+.tgl-btn:before {
          content: "Yes";
          left: 4px;
          color: #fff;
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-35">

        <input class="switch" type="checkbox" id="switch" name="switch" value="private">
        <label for="switch">
          <span class="switch-x-text">This is </span>
          <span class="switch-x-toggletext">
            <span class="switch-x-unchecked"><span class="switch-x-hiddenlabel">Unchecked: </span>Off</span>
            <span class="switch-x-checked"><span class="switch-x-hiddenlabel">Checked: </span>On</span>
          </span>
        </label>

      </div>
      <style>
        .checkbox-wrapper-35 .switch {
          display: none;
        }

        .checkbox-wrapper-35 .switch+label {
          -webkit-box-align: center;
          -webkit-align-items: center;
          -ms-flex-align: center;
          align-items: center;
          color: #78768d;
          cursor: pointer;
          display: -webkit-box;
          display: -webkit-flex;
          display: -ms-flexbox;
          display: flex;
          font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
          font-size: 12px;
          line-height: 15px;
          position: relative;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }

        .checkbox-wrapper-35 .switch+label::before,
        .checkbox-wrapper-35 .switch+label::after {
          content: '';
          display: block;
        }

        .checkbox-wrapper-35 .switch+label::before {
          background-color: #05012c;
          border-radius: 500px;
          height: 15px;
          margin-right: 8px;
          -webkit-transition: background-color 0.125s ease-out;
          transition: background-color 0.125s ease-out;
          width: 25px;
        }

        .checkbox-wrapper-35 .switch+label::after {
          background-color: #fff;
          border-radius: 13px;
          box-shadow: 0 3px 1px 0 rgba(37, 34, 71, 0.05), 0 2px 2px 0 rgba(37, 34, 71, 0.1), 0 3px 3px 0 rgba(37, 34, 71, 0.05);
          height: 13px;
          left: 1px;
          position: absolute;
          top: 1px;
          -webkit-transition: -webkit-transform 0.125s ease-out;
          transition: -webkit-transform 0.125s ease-out;
          transition: transform 0.125s ease-out;
          transition: transform 0.125s ease-out, -webkit-transform 0.125s ease-out;
          width: 13px;
        }

        .checkbox-wrapper-35 .switch+label .switch-x-text {
          display: block;
          margin-right: .3em;
        }

        .checkbox-wrapper-35 .switch+label .switch-x-toggletext {
          display: block;
          font-weight: bold;
          height: 15px;
          overflow: hidden;
          position: relative;
          width: 25px;
        }

        .checkbox-wrapper-35 .switch+label .switch-x-unchecked,
        .checkbox-wrapper-35 .switch+label .switch-x-checked {
          left: 0;
          position: absolute;
          top: 0;
          -webkit-transition: opacity 0.125s ease-out, -webkit-transform 0.125s ease-out;
          transition: opacity 0.125s ease-out, -webkit-transform 0.125s ease-out;
          transition: transform 0.125s ease-out, opacity 0.125s ease-out;
          transition: transform 0.125s ease-out, opacity 0.125s ease-out, -webkit-transform 0.125s ease-out;
        }

        .checkbox-wrapper-35 .switch+label .switch-x-unchecked {
          opacity: 1;
          -webkit-transform: none;
          transform: none;
        }

        .checkbox-wrapper-35 .switch+label .switch-x-checked {
          opacity: 0;
          -webkit-transform: translate3d(0, 100%, 0);
          transform: translate3d(0, 100%, 0);
        }

        .checkbox-wrapper-35 .switch+label .switch-x-hiddenlabel {
          position: absolute;
          visibility: hidden;
        }

        .checkbox-wrapper-35 .switch:checked+label::before {
          background-color: #ffb500;
        }

        .checkbox-wrapper-35 .switch:checked+label::after {
          -webkit-transform: translate3d(10px, 0, 0);
          transform: translate3d(10px, 0, 0);
        }

        .checkbox-wrapper-35 .switch:checked+label .switch-x-unchecked {
          opacity: 0;
          -webkit-transform: translate3d(0, -100%, 0);
          transform: translate3d(0, -100%, 0);
        }

        .checkbox-wrapper-35 .switch:checked+label .switch-x-checked {
          opacity: 1;
          -webkit-transform: none;
          transform: none;
        }
      </style>

    </li>


    <li onclick="copyCheckbox(event, this)" style="background: rgb(229, 229, 229);">
      <div class="checkbox-wrapper-37">

        <input type="checkbox" name="checkbox" id="terms-checkbox-37">
        <label for="terms-checkbox-37" class="terms-label">
          <svg class="checkbox-svg" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
            <mask id="path-1-inside-1_476_5-37" fill="white">
              <rect width="200" height="200"></rect>
            </mask>
            <rect width="200" height="200" class="checkbox-box" stroke-width="40" mask="url(#path-1-inside-1_476_5-37)">
            </rect>
            <path class="checkbox-tick" d="M52 111.018L76.9867 136L149 64" stroke-width="15"></path>
          </svg>
          <span class="label-text">Checkbox</span>
        </label>

      </div>
      <style>
        .checkbox-wrapper-37 input[type="checkbox"] {
          display: none;
        }

        .checkbox-wrapper-37 .terms-label {
          cursor: pointer;
          display: flex;
          align-items: center;
        }

        .checkbox-wrapper-37 .terms-label .label-text {
          margin-left: 10px;
        }

        .checkbox-wrapper-37 .checkbox-svg {
          width: 30px;
          height: 30px;
        }

        .checkbox-wrapper-37 .checkbox-box {
          fill: #fff;
          stroke: #ff7a00;
          stroke-dasharray: 800;
          stroke-dashoffset: 800;
          transition: stroke-dashoffset 0.6s ease-in;
        }

        .checkbox-wrapper-37 .checkbox-tick {
          stroke: #ff7a00;
          stroke-dasharray: 172;
          stroke-dashoffset: 172;
          transition: stroke-dashoffset 0.6s ease-in;
        }

        .checkbox-wrapper-37 input[type="checkbox"]:checked+.terms-label .checkbox-box,
        .checkbox-wrapper-37 input[type="checkbox"]:checked+.terms-label .checkbox-tick {
          stroke-dashoffset: 0;
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-39">

        <label>
          <input type="checkbox">
          <span class="checkbox"></span>
        </label>

      </div>
      <style>
        .checkbox-wrapper-39 *,
        .checkbox-wrapper-39 *::before,
        .checkbox-wrapper-39 *::after {
          box-sizing: border-box;
        }

        .checkbox-wrapper-39 label {
          display: block;
          width: 35px;
          height: 35px;
          cursor: pointer;
        }

        .checkbox-wrapper-39 input {
          visibility: hidden;
          display: none;
        }

        .checkbox-wrapper-39 input:checked~.checkbox {
          transform: rotate(45deg);
          width: 14px;
          margin-left: 12px;
          border-color: #24c78e;
          border-top-color: transparent;
          border-left-color: transparent;
          border-radius: 0;
        }

        .checkbox-wrapper-39 .checkbox {
          display: block;
          width: inherit;
          height: inherit;
          border: 3px solid #434343;
          border-radius: 6px;
          transition: all 0.375s;
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-42">

        <input id="cbx-42" type="checkbox">
        <label class="cbx" for="cbx-42"></label>
        <label class="lbl" for="cbx-42">Magic</label>

      </div>
      <style>
        .checkbox-wrapper-42 input[type="checkbox"] {
          display: none;
          visibility: hidden;
        }

        .checkbox-wrapper-42 label {
          display: inline-block;
        }

        .checkbox-wrapper-42 .cbx {
          position: relative;
          top: 1px;
          width: 17px;
          height: 17px;
          border: 1px solid #c8ccd4;
          border-radius: 3px;
          vertical-align: middle;
          transition: background 0.1s ease;
          cursor: pointer;
        }

        .checkbox-wrapper-42 .cbx:after {
          content: '';
          position: absolute;
          top: 1px;
          left: 5px;
          width: 5px;
          height: 11px;
          opacity: 0;
          transform: rotate(45deg) scale(0);
          border-right: 2px solid #fff;
          border-bottom: 2px solid #fff;
          transition: all 0.3s ease;
          transition-delay: 0.15s;
        }

        .checkbox-wrapper-42 .lbl {
          margin-left: 5px;
          vertical-align: middle;
          cursor: pointer;
        }

        .checkbox-wrapper-42 input[type="checkbox"]:checked~.cbx {
          border-color: transparent;
          background: #6871f1;
          animation: jelly-42 0.6s ease;
        }

        .checkbox-wrapper-42 input[type="checkbox"]:checked~.cbx:after {
          opacity: 1;
          transform: rotate(45deg) scale(1);
        }

        .checkbox-wrapper-42 .cntr {
          position: absolute;
          top: 50%;
          left: 0;
          width: 100%;
          text-align: center;
        }

        @-moz-keyframes jelly-42 {
          from {
            transform: scale(1, 1);
          }

          30% {
            transform: scale(1.25, 0.75);
          }

          40% {
            transform: scale(0.75, 1.25);
          }

          50% {
            transform: scale(1.15, 0.85);
          }

          65% {
            transform: scale(0.95, 1.05);
          }

          75% {
            transform: scale(1.05, 0.95);
          }

          to {
            transform: scale(1, 1);
          }
        }

        @-webkit-keyframes jelly-42 {
          from {
            transform: scale(1, 1);
          }

          30% {
            transform: scale(1.25, 0.75);
          }

          40% {
            transform: scale(0.75, 1.25);
          }

          50% {
            transform: scale(1.15, 0.85);
          }

          65% {
            transform: scale(0.95, 1.05);
          }

          75% {
            transform: scale(1.05, 0.95);
          }

          to {
            transform: scale(1, 1);
          }
        }

        @-o-keyframes jelly-42 {
          from {
            transform: scale(1, 1);
          }

          30% {
            transform: scale(1.25, 0.75);
          }

          40% {
            transform: scale(0.75, 1.25);
          }

          50% {
            transform: scale(1.15, 0.85);
          }

          65% {
            transform: scale(0.95, 1.05);
          }

          75% {
            transform: scale(1.05, 0.95);
          }

          to {
            transform: scale(1, 1);
          }
        }

        @keyframes jelly-42 {
          from {
            transform: scale(1, 1);
          }

          30% {
            transform: scale(1.25, 0.75);
          }

          40% {
            transform: scale(0.75, 1.25);
          }

          50% {
            transform: scale(1.15, 0.85);
          }

          65% {
            transform: scale(0.95, 1.05);
          }

          75% {
            transform: scale(1.05, 0.95);
          }

          to {
            transform: scale(1, 1);
          }
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-43">

        <input type="checkbox" id="cbx-43">
        <label for="cbx-43" class="check">
          <svg width="18px" height="18px" viewBox="0 0 18 18">
            <path
              d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z">
            </path>
            <polyline points="1 9 7 14 15 4"></polyline>
          </svg>
        </label>

      </div>
      <style>
        .checkbox-wrapper-43 input[type="checkbox"] {
          display: none;
          visibility: hidden;
        }

        .checkbox-wrapper-43 label {
          display: inline-block;
        }

        .checkbox-wrapper-43 .check {
          cursor: pointer;
          position: relative;
          margin: auto;
          width: 18px;
          height: 18px;
          -webkit-tap-highlight-color: transparent;
          transform: translate3d(0, 0, 0);
        }

        .checkbox-wrapper-43 .check:before {
          content: "";
          position: absolute;
          top: -15px;
          left: -15px;
          width: 48px;
          height: 48px;
          border-radius: 50%;
          background: rgba(34, 50, 84, 0.03);
          opacity: 0;
          transition: opacity 0.2s ease;
        }

        .checkbox-wrapper-43 .check svg {
          position: relative;
          z-index: 1;
          fill: none;
          stroke-linecap: round;
          stroke-linejoin: round;
          stroke: #c8ccd4;
          stroke-width: 1.5;
          transform: translate3d(0, 0, 0);
          transition: all 0.2s ease;
        }

        .checkbox-wrapper-43 .check svg path {
          stroke-dasharray: 60;
          stroke-dashoffset: 0;
        }

        .checkbox-wrapper-43 .check svg polyline {
          stroke-dasharray: 22;
          stroke-dashoffset: 66;
        }

        .checkbox-wrapper-43 .check:hover:before {
          opacity: 1;
        }

        .checkbox-wrapper-43 .check:hover svg {
          stroke: #4285f4;
        }

        .checkbox-wrapper-43 input[type="checkbox"]:checked+.check svg {
          stroke: #4285f4;
        }

        .checkbox-wrapper-43 input[type="checkbox"]:checked+.check svg path {
          stroke-dashoffset: 60;
          transition: all 0.3s linear;
        }

        .checkbox-wrapper-43 input[type="checkbox"]:checked+.check svg polyline {
          stroke-dashoffset: 42;
          transition: all 0.2s linear;
          transition-delay: 0.15s;
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-46">

        <input class="inp-cbx" id="cbx-46" type="checkbox">
        <label class="cbx" for="cbx-46"><span>
            <svg width="12px" height="10px" viewBox="0 0 12 10">
              <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
            </svg></span><span>Checkbox</span>
        </label>

      </div>
      <style>
        .checkbox-wrapper-46 input[type="checkbox"] {
          display: none;
          visibility: hidden;
        }

        .checkbox-wrapper-46 .cbx {
          margin: auto;
          -webkit-user-select: none;
          user-select: none;
          cursor: pointer;
        }

        .checkbox-wrapper-46 .cbx span {
          display: inline-block;
          vertical-align: middle;
          transform: translate3d(0, 0, 0);
        }

        .checkbox-wrapper-46 .cbx span:first-child {
          position: relative;
          width: 18px;
          height: 18px;
          border-radius: 3px;
          transform: scale(1);
          vertical-align: middle;
          border: 1px solid #9098A9;
          transition: all 0.2s ease;
        }

        .checkbox-wrapper-46 .cbx span:first-child svg {
          position: absolute;
          top: 3px;
          left: 2px;
          fill: none;
          stroke: #FFFFFF;
          stroke-width: 2;
          stroke-linecap: round;
          stroke-linejoin: round;
          stroke-dasharray: 16px;
          stroke-dashoffset: 16px;
          transition: all 0.3s ease;
          transition-delay: 0.1s;
          transform: translate3d(0, 0, 0);
        }

        .checkbox-wrapper-46 .cbx span:first-child:before {
          content: "";
          width: 100%;
          height: 100%;
          background: #506EEC;
          display: block;
          transform: scale(0);
          opacity: 1;
          border-radius: 50%;
        }

        .checkbox-wrapper-46 .cbx span:last-child {
          padding-left: 8px;
        }

        .checkbox-wrapper-46 .cbx:hover span:first-child {
          border-color: #506EEC;
        }

        .checkbox-wrapper-46 .inp-cbx:checked+.cbx span:first-child {
          background: #506EEC;
          border-color: #506EEC;
          animation: wave-46 0.4s ease;
        }

        .checkbox-wrapper-46 .inp-cbx:checked+.cbx span:first-child svg {
          stroke-dashoffset: 0;
        }

        .checkbox-wrapper-46 .inp-cbx:checked+.cbx span:first-child:before {
          transform: scale(3.5);
          opacity: 0;
          transition: all 0.6s ease;
        }

        @keyframes wave-46 {
          50% {
            transform: scale(0.9);
          }
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-51">

        <input type="checkbox" id="cbx-51">
        <label for="cbx-51" class="toggle">
          <span>
            <svg width="10px" height="10px" viewBox="0 0 10 10">
              <path
                d="M5,1 L5,1 C2.790861,1 1,2.790861 1,5 L1,5 C1,7.209139 2.790861,9 5,9 L5,9 C7.209139,9 9,7.209139 9,5 L9,5 C9,2.790861 7.209139,1 5,1 L5,9 L5,1 Z">
              </path>
            </svg>
          </span>
        </label>

      </div>
      <style>
        .checkbox-wrapper-51 input[type="checkbox"] {
          visibility: hidden;
          display: none;
        }

        .checkbox-wrapper-51 .toggle {
          position: relative;
          display: block;
          width: 42px;
          height: 24px;
          cursor: pointer;
          -webkit-tap-highlight-color: transparent;
          transform: translate3d(0, 0, 0);
        }

        .checkbox-wrapper-51 .toggle:before {
          content: "";
          position: relative;
          top: 1px;
          left: 1px;
          width: 40px;
          height: 22px;
          display: block;
          background: #c8ccd4;
          border-radius: 12px;
          transition: background 0.2s ease;
        }

        .checkbox-wrapper-51 .toggle span {
          position: absolute;
          top: 0;
          left: 0;
          width: 24px;
          height: 24px;
          display: block;
          background: #fff;
          border-radius: 50%;
          box-shadow: 0 2px 6px rgba(154, 153, 153, 0.75);
          transition: all 0.2s ease;
        }

        .checkbox-wrapper-51 .toggle span svg {
          margin: 7px;
          fill: none;
        }

        .checkbox-wrapper-51 .toggle span svg path {
          stroke: #c8ccd4;
          stroke-width: 2;
          stroke-linecap: round;
          stroke-linejoin: round;
          stroke-dasharray: 24;
          stroke-dashoffset: 0;
          transition: all 0.5s linear;
        }

        .checkbox-wrapper-51 input[type="checkbox"]:checked+.toggle:before {
          background: #52d66b;
        }

        .checkbox-wrapper-51 input[type="checkbox"]:checked+.toggle span {
          transform: translateX(18px);
        }

        .checkbox-wrapper-51 input[type="checkbox"]:checked+.toggle span path {
          stroke: #52d66b;
          stroke-dasharray: 25;
          stroke-dashoffset: 25;
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-53">

        <label class="container">
          <input type="checkbox">
          <div class="checkmark"></div>
        </label>

      </div>
      <style>
        .checkbox-wrapper-53 input[type="checkbox"] {
          visibility: hidden;
          display: none;
        }

        .checkbox-wrapper-53 .container {
          display: block;
          position: relative;
          cursor: pointer;
          font-size: 20px;
          user-select: none;
        }

        .checkbox-wrapper-53 .checkmark {
          position: relative;
          top: 0;
          left: 0;
          height: 1.3em;
          width: 1.3em;
          background-color: #ccc;
          border-radius: 100%;
          background: #e8e8e8;
          box-shadow: 3px 3px 5px #c5c5c5,
            -3px -3px 5px #ffffff;
        }

        .checkbox-wrapper-53 .container input:checked~.checkmark {
          box-shadow: inset 3px 3px 5px #c5c5c5,
            inset -3px -3px 5px #ffffff;
        }

        .checkbox-wrapper-53 .checkmark:after {
          content: "";
          position: absolute;
          opacity: 0;
        }

        .checkbox-wrapper-53 .container input:checked~.checkmark:after {
          opacity: 1;
        }

        .checkbox-wrapper-53 .container .checkmark:after {
          left: 0.45em;
          top: 0.25em;
          width: 0.25em;
          height: 0.5em;
          border: solid darkgray;
          border-width: 0 0.15em 0.15em 0;
          transform: rotate(45deg);
          transition: all 250ms;
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-59">

        <label class="switch">
          <input type="checkbox">
          <span class="slider"></span>
        </label>

      </div>
      <style>
        .checkbox-wrapper-59 input[type="checkbox"] {
          visibility: hidden;
          display: none;
        }

        .checkbox-wrapper-59 *,
        .checkbox-wrapper-59 ::after,
        .checkbox-wrapper-59 ::before {
          box-sizing: border-box;
        }

        .checkbox-wrapper-59 .switch {
          width: 60px;
          height: 30px;
          position: relative;
          display: inline-block;
        }

        .checkbox-wrapper-59 .slider {
          position: absolute;
          top: 0;
          bottom: 0;
          left: 0;
          right: 0;
          border-radius: 30px;
          box-shadow: 0 0 0 2px #777, 0 0 4px #777;
          cursor: pointer;
          border: 4px solid transparent;
          overflow: hidden;
          transition: 0.2s;
        }

        .checkbox-wrapper-59 .slider:before {
          position: absolute;
          content: "";
          width: 100%;
          height: 100%;
          background-color: #777;
          border-radius: 30px;
          transform: translateX(-56px);
          transition: 0.2s;
        }

        .checkbox-wrapper-59 input:checked+.slider:before {
          transform: translateX(4px);
          background-color: limeGreen;
        }

        .checkbox-wrapper-59 input:checked+.slider {
          box-shadow: 0 0 0 2px limeGreen, 0 0 8px limeGreen;
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-60">

        <input type="checkbox" class="check" id="check1-60">
        <label for="check1-60" class="label">
          <svg viewBox="0 0 65 65" height="30" width="30">
            <rect x="7" y="7" width="50" height="50" stroke="black" fill="none"></rect>
            <g transform="translate(-23,-967.36216)" id="layer1-60">
              <path id="path4146" d="m 55,978 c -73,19 46,71 15,2 C 60,959 13,966 30,1007 c 12,30 61,13 46,-23"
                fill="none" stroke="black" stroke-width="3" class="path1"></path>
            </g>
          </svg>
          <span>Checkbox</span>
        </label>

      </div>
      <style>
        .checkbox-wrapper-60 input[type="checkbox"] {
          visibility: hidden;
          display: none;
        }

        .checkbox-wrapper-60 *,
        .checkbox-wrapper-60 ::after,
        .checkbox-wrapper-60 ::before {
          box-sizing: border-box;
        }

        .checkbox-wrapper-60 {
          position: relative;
          display: block;
          overflow: hidden;
        }

        .checkbox-wrapper-60 .check {
          width: 50px;
          height: 50px;
          position: absolute;
          opacity: 0;
        }

        .checkbox-wrapper-60 .label svg {
          vertical-align: middle;
        }

        .checkbox-wrapper-60 .path1 {
          stroke-dasharray: 400;
          stroke-dashoffset: 400;
          transition: .5s all;
        }

        .checkbox-wrapper-60 .check:checked+label svg g path {
          stroke-dashoffset: 0;
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-61">

        <input type="checkbox" class="check" id="check1-61">
        <label for="check1-61" class="label">
          <svg width="45" height="45" viewBox="0 0 95 95">
            <rect x="30" y="20" width="50" height="50" stroke="black" fill="none"></rect>
            <g transform="translate(0,-952.36222)">
              <path d="m 56,963 c -102,122 6,9 7,9 17,-5 -66,69 -38,52 122,-77 -7,14 18,4 29,-11 45,-43 23,-4 "
                stroke="black" stroke-width="3" fill="none" class="path1"></path>
            </g>
          </svg>
          <span>Checkbox</span>
        </label>

      </div>
      <style>
        .checkbox-wrapper-61 input[type="checkbox"] {
          visibility: hidden;
          display: none;
        }

        .checkbox-wrapper-61 *,
        .checkbox-wrapper-61 ::after,
        .checkbox-wrapper-61 ::before {
          box-sizing: border-box;
        }

        .checkbox-wrapper-61 {
          position: relative;
          display: block;
          overflow: hidden;
        }

        .checkbox-wrapper-61 .check {
          width: 50px;
          height: 50px;
          position: absolute;
          opacity: 0;
        }

        .checkbox-wrapper-61 .label svg {
          vertical-align: middle;
        }

        .checkbox-wrapper-61 .path1 {
          stroke-dasharray: 400;
          stroke-dashoffset: 400;
          transition: .5s stroke-dashoffset;
          opacity: 0;
        }

        .checkbox-wrapper-61 .check:checked+label svg g path {
          stroke-dashoffset: 0;
          opacity: 1;
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-62">

        <input type="checkbox" class="check" id="check1-62">
        <label for="check1-62" class="label">
          <svg width="43" height="43" viewBox="0 0 90 90">
            <rect x="30" y="20" width="50" height="50" stroke="black" fill="none"></rect>
            <g transform="translate(0,-952.36218)">
              <path d="m 13,983 c 33,6 40,26 55,48 " stroke="black" stroke-width="3" class="path1" fill="none"></path>
              <path d="M 75,970 C 51,981 34,1014 25,1031 " stroke="black" stroke-width="3" class="path1" fill="none">
              </path>
            </g>
          </svg>
          <span>Checkbox</span>
        </label>

      </div>
      <style>
        .checkbox-wrapper-62 input[type="checkbox"] {
          visibility: hidden;
          display: none;
        }

        .checkbox-wrapper-62 *,
        .checkbox-wrapper-62 ::after,
        .checkbox-wrapper-62 ::before {
          box-sizing: border-box;
        }

        .checkbox-wrapper-62 {
          position: relative;
          display: block;
          overflow: hidden;
        }

        .checkbox-wrapper-62 .check {
          width: 50px;
          height: 50px;
          position: absolute;
          opacity: 0;
        }

        .checkbox-wrapper-62 .label svg {
          vertical-align: middle;
        }

        .checkbox-wrapper-62 .path1 {
          stroke-dasharray: 400;
          stroke-dashoffset: 400;
          transition: .5s all;
        }

        .checkbox-wrapper-62 .check:checked+label svg g path {
          stroke-dashoffset: 0;
        }
      </style>

    </li>


    <li onclick="copyCheckbox(event, this)">
      <div class="checkbox-wrapper-64">

        <label class="switch">
          <input type="checkbox">
          <span class="slider"></span>
        </label>

      </div>
      <style>
        .checkbox-wrapper-64 input[type="checkbox"] {
          visibility: hidden;
          display: none;
        }

        .checkbox-wrapper-64 *,
        .checkbox-wrapper-64 ::after,
        .checkbox-wrapper-64 ::before {
          box-sizing: border-box;
        }

        /* The switch - the box around the slider */
        .checkbox-wrapper-64 .switch {
          font-size: 17px;
          position: relative;
          display: inline-block;
          width: 3.5em;
          height: 2em;
        }

        /* Hide default HTML checkbox */
        .checkbox-wrapper-64 .switch input {
          opacity: 0;
          width: 0;
          height: 0;
        }

        /* The slider */
        .checkbox-wrapper-64 .slider {
          position: absolute;
          cursor: pointer;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          background-color: #fff;
          border: 1px solid #adb5bd;
          transition: .4s;
          border-radius: 30px;
        }

        .checkbox-wrapper-64 .slider:before {
          position: absolute;
          content: "";
          height: 1.4em;
          width: 1.4em;
          border-radius: 20px;
          left: 0.27em;
          bottom: 0.25em;
          background-color: #adb5bd;
          transition: .4s;
        }

        .checkbox-wrapper-64 input:checked+.slider {
          background-color: #007bff;
          border: 1px solid #007bff;
        }

        .checkbox-wrapper-64 input:focus+.slider {
          box-shadow: 0 0 1px #007bff;
        }

        .checkbox-wrapper-64 input:checked+.slider:before {
          transform: translateX(1.4em);
          background-color: #fff;
        }
      </style>

    </li>

    <li onclick="copyCheckbox(event, this)" class="">
      <div class="checkbox-wrapper-65">

        <label for="cbk1-65">
          <input type="checkbox" id="cbk1-65">
          <span class="cbx">
            <svg width="12px" height="11px" viewBox="0 0 12 11">
              <polyline points="1 6.29411765 4.5 10 11 1"></polyline>
            </svg>
          </span>
          <span>Checkbox</span>
        </label>

      </div>
      <style>
        .checkbox-wrapper-65 *,
        .checkbox-wrapper-65 ::after,
        .checkbox-wrapper-65 ::before {
          box-sizing: border-box;
        }

        .checkbox-wrapper-65 .cbx {
          position: relative;
          display: block;
          float: left;
          width: 18px;
          height: 18px;
          border-radius: 4px;
          background-color: #606062;
          background-image: linear-gradient(#474749, #606062);
          box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.15), inset 0 -1px 1px rgba(0, 0, 0, 0.15);
          transition: all 0.15s ease;
        }

        .checkbox-wrapper-65 .cbx svg {
          position: absolute;
          top: 3px;
          left: 3px;
          fill: none;
          stroke-linecap: round;
          stroke-linejoin: round;
          stroke: #fff;
          stroke-width: 2;
          stroke-dasharray: 17;
          stroke-dashoffset: 17;
          transform: translate3d(0, 0, 0);
        }

        .checkbox-wrapper-65 .cbx+span {
          float: left;
          margin-left: 6px;
        }

        .checkbox-wrapper-65 {
          user-select: none;
        }

        .checkbox-wrapper-65 label {
          display: inline-block;
          cursor: pointer;
        }

        .checkbox-wrapper-65 input[type="checkbox"] {
          display: none;
          visibility: hidden;
        }

        .checkbox-wrapper-65 input[type="checkbox"]:checked+.cbx {
          background-color: #606062;
          background-image: linear-gradient(#255cd2, #1d52c1);
        }

        .checkbox-wrapper-65 input[type="checkbox"]:checked+.cbx svg {
          stroke-dashoffset: 0;
          transition: all 0.15s ease;
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
  <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
  <script>
  const notyf = new Notyf({
    duration: 2000,
    position: { x: 'right', y: 'bottom' }
  });

  function copyCheckbox(event, element) {
    const clickedElement = event.target;

    if (
      clickedElement.tagName === 'INPUT' ||
      clickedElement.tagName === 'LABEL' ||
      clickedElement.closest('label')
    ) {
      return;
    }

    if (element.classList.contains('copied')) {
      notyf.error('Already copied!');
      return;
    }

    const clone = element.cloneNode(true);
    clone.querySelector('.copy-btn')?.remove();

    const htmlContent = clone.innerHTML.trim();

    navigator.clipboard.writeText(htmlContent)
      .then(() => {
        element.classList.add('copied');
        notyf.success('Checkbox copied!');
        setTimeout(() => element.classList.remove('copied'), 2000);
      })
      .catch(err => {
        notyf.error('Failed to copy!');
        console.error(err);
      });
  }
</script>



  <style>
    .checkboxes-wrapper li {
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 10px;
      margin-bottom: 15px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .checkboxes-wrapper li:not(.copied):hover {
      background: #f5faff;
    }

    .checkboxes-wrapper li.copied {
      background: #e6ffe6;
      border-color: #8bc34a;
      cursor: default;
    }
  </style>



</body>