@include('header')

    <title>Transfer</title>
</head>
<body>
    <!-- Pallet Transfer Form -->
    <div class="p-5 bg-light rounded-3">
        <h2 class="fw-bold mb-4">PALLET TRANSFER</h2>
          <form class="row g-3" action="/save-transfer" method="POST">
            @csrf
              <div class="col-md-4">
                <label for="inputDate" class="form-label">Date</label>
                <input type="date" class="form-control" id="inputDate" name="date">
              </div>
              <div class="col-md-4"></div>
              <div class="col-md-4"></div>
              <div class="col-md-6">
                <label for="dataListCompany" class="form-label">Company</label>
                <input class="form-control" list="datalistOptions" id="dataListCompany" name="company">
                  <datalist id="datalistOptions">
                    <option value="NEWCOLD">
                    <option value="OPAL">
                    <option value="LEMNOS">
                    <option value="LOSCAM">
                    <option value="LONGWARRY">
                  </datalist>
              </div>
              <div class="col-md-6">
                <label for="inputReference" class="form-label">Reference</label>
                <input type="text" class="form-control" id="inputReference" name="reference">
              </div>
              <div class="col-md-6">
                <label for="inputEquipmentType" class="form-label">Equipment Type</label>
                <select id="inputEquipmentType" class="form-select" name="equipment_type">
                  <option selected>LOSCAM-WOOD</option>
                  <option>CHEP-WOOD</option>
                  <option>LOSCAM-PLASTIC</option>
                  <option>LOSCAM-F3</option>
                  <option>CHEP-PLASTIC</option>
                  <option>LOSCAM-FB2</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="inputTransferType" class="form-label">Transfer Type</label>
                <select id="inputTransferType" class="form-select" name="transfer_type">
                  <option selected>TRANSFER OUT</option>
                  <option>TRANSFER IN</option>
                  <option>ISSUE</option>
                  <option>DEHIRE</option>
                </select>
              </div>
              <div class="col-md-4">
                <label for="inputQuantity" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="inputQuantity" name="quantity">
              </div>
              <div class="col-md-8">
                <label for="inputDocket" class="form-label">Docket #</label>
                <input type="text" class="form-control" id="inputDocket" name="docket">
              </div>
              <div class="col-12">
                <label for="textareaComments" class="form-label">Comments</label>
                <textarea class="form-control" id="textareaComments" rows="4" name="comments"></textarea>
              </div>
              <!-- <div class="col-12">
                   <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck">
                  <label class="form-check-label" for="gridCheck">
                    Check me out
                  </label> 
                </div> 
              </div> -->
              <div class="col-12 text-end pt-4">
                        <a href="/" class="btn btn-outline-danger px-5">Back</a>
                <button type="submit" class="btn btn-secondary px-5 ms-2">Save</button>
              </div>
            </form>
      </div>

  @include('footer')