@include('header')

<title>Main Menu</title>
</head>
<body>
    <!-- MAIN MENU -->

<div class="text-center" id="mainMenu">
    <div class="row g-3">
      <div class="p-2 col-md-6">
        <button type="button" class="btn btn-outline-secondary primaryOutlineColor menuButton">OUTBOUND DELIVERIES</button>
      </div>
      <div class="p-2 col-md-6">
        <button type="button" class="btn btn-outline-secondary primaryOutlineColor menuButton">INCOMING GOODS</button>
      </div>
      <div class="p-2 col-md-6">
            <a href="/pallet-transfer" class="btn btn-outline-secondary primaryOutlineColor menuButton">PALLET TRANSFER</a>
      </div>
      <div class="p-2 col-md-6">
        <button onclick="" type="button" class="btn btn-outline-secondary primaryOutlineColor menuButton">REPORTS</button>
      </div>
    </div>
  </div>

  @include('footer')

