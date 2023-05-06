<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="{{asset('FreeAssets/images/favicon.ico>')}}">
    <script src="{{asset('FreeAssets/js/layout.js')}}"></script>
    <link href="{{asset('FreeAssets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('FreeAssets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('FreeAssets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('FreeAssets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />


</head>
<body>

<div class="container-fluid">

    <!-- start page title -->

    <!-- end page title -->

    <div class="row justify-content-center" style="margin-top: 19px">
        <div class="col-xxl-9">
            <div class="card">
                <form method="post" action="{{route('store_contrat')}}" class="needs-validation" novalidate id="invoice_form">
                   @csrf
                    <div class="card-body border-bottom border-bottom-dashed p-4">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="profile-user mx-auto mb-3">
                                    <label for="profile-img-file-input" class="d-block" tabindex="0">
                                        <h6>Freelancer Picture</h6>
                                        <span class="overflow-hidden border border-dashed d-flex align-items-center justify-content-center rounded" style="height: 50%; width: 50%;">
                                            <img src="{{asset('uploads/photouser/'.$prop->first()->image_user)}}" class="card-logo card-logo-dark user-profile-image img-fluid" alt="logo dark">
                                            <img src="" class="card-logo card-logo-light user-profile-image img-fluid" alt="logo light">
                                        </span>
                                    </label>
                                </div>

                                <div>
                                    <div>
                                        <label for="Client Adress">Address</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="hidden" name="id" value="{{$prop->first()->id}}">
                                        <input type="hidden" name="img_freelancer" value="{{$prop->first()->image_user}}">
                                        <input type="text" class="form-control bg-light border-0" name="adresse_client" id="companyAddress" value="{{Auth::user()->adresse}}" placeholder="Company Address" required />
                                        <div class="invalid-feedback">
                                            Please enter a address
                                        </div>
                                    </div>
                                    <div>
                                        <input type="number" name="code_postal_client" class="form-control bg-light border-0" value="{{Auth::user()->codepostal}}" id="companyaddpostalcode" minlength="5" maxlength="6" placeholder="Enter Postal Code" required />
                                        <div class="invalid-feedback">
                                            The US zip code must contain 5 digits, Ex. 45678
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-4 ms-auto">
                                <div class="mb-2">
                                    <?php
                                    // Générer un nombre aléatoire entre 0 et 100000000
                                    $registrationNumber = rand(0, 10000000);

                                    // Formater le nombre pour avoir exactement 8 chiffres
                                    $formattedRegistrationNumber = str_pad($registrationNumber, 8, '0', STR_PAD_LEFT);
                                    ?>
                                    <input type="number" name="legal" class="form-control bg-light border-0" id="registrationNumber" maxlength="12" value="{{ $formattedRegistrationNumber }}" readonly placeholder="Legal Registration No" required />
                                    <div class="invalid-feedback">
                                        Please enter a registration no, Ex., 012345678912
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <input type="email" name="email_client" class="form-control bg-light border-0" value="{{Auth::user()->email}}" id="companyEmail" placeholder="Email Address" required />
                                    <div class="invalid-feedback">
                                        Please enter a valid email, Ex., example@gamil.com
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <input type="text" name="web_site_client" class="form-control bg-light border-0" id="companyWebsite" placeholder="Website"/>
                                    <div class="invalid-feedback">
                                        Please enter a website, Ex., www.example.com
                                    </div>
                                </div>
                                <div>
                                    <input type="number" name="phone_client" class="form-control bg-light border-0" data-plugin="cleave-phone" value="{{Auth::user()->phone}}" id="compnayContactno" placeholder="Contact No" required />
                                    <div class="invalid-feedback">
                                        Please enter a contact number
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                    <div class="card-body p-4">
                        <div class="row g-3">
                            <div class="col-lg-3 col-sm-6">
                                <?php
                                // Générer un nombre aléatoire entre 0 et 100000000
                                $registrationNumber = rand(0, 1000000000000);

                                // Formater le nombre pour avoir exactement 8 chiffres
                                $formattedRegistrationNumber = str_pad($registrationNumber, 10, '0', STR_PAD_LEFT);
                                ?>
                                <label for="invoicenoInput">Invoice No</label>
                                <input type="number" name="num_facture" class="form-control bg-light border-0" id="invoicenoInput" placeholder="Invoice No" value="{{ $formattedRegistrationNumber }}" readonly />
                            </div>
                            <!--end col-->
                            <div class="col-lg-3 col-sm-6">
                                <div>
                                    <label for="date-field">Date</label>
                                    <input type="date" name="date" class="form-control bg-light border-0" id="date-field" readonly data-provider="flatpickr" data-time="true" placeholder="Select Date-time">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-3 col-sm-6">
                                <label for="choices-payment-status">Payment Status</label>
                                <div class="input-light">
                                    <select class="form-control bg-light border-0" name="payment_status" data-choices data-choices-search-false id="choices-payment-status" required>
                                        <option value="null">Select Payment Status</option>
                                        <option value="Paid">Paid</option>
                                        <option value="Unpaid">Unpaid</option>
                                        <option value="Refund">Refund</option>
                                    </select>
                                </div>
                                @if(session('payment_status_error'))
                                    <p class="text-danger">{{session('payment_status_error')}}</p>
                                @endif
                            </div>
                            <!--end col-->
                            <div class="col-lg-3 col-sm-6">
                                <div>
                                    <label for="totalamountInput">Total Amount</label>
                                    @if($prop->first()->type_price=='Per semaine')
                                    <input type="number" class="form-control bg-light border-0" name="total_amount" value="{{substr($prop->first()->price, 1)*$prop->first()->semaine}}" readonly id="totalamountInput" placeholder="$0.00"/>
                                    @else
                                        <input type="number" class="form-control bg-light border-0" name="total_amount" value="{{$prop->first()->price}}" readonly id="totalamountInput" placeholder="$0.00"/>
                                    @endif
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <div class="card-body p-4 border-top border-top-dashed">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div>
                                    <label for="billingName" class="text-muted text-uppercase fw-semibold">CLIENT ADDRESS</label>
                                </div>
                                <div class="mb-2">
                                    <input type="text"  class="form-control bg-light border-0" name="name_client" readonly value="{{Auth::user()->name}}" id="billingName" placeholder="Full Name" required />
                                    <div class="invalid-feedback">
                                        Please enter a full name
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <input readonly type="text" name="adresse_client" value="{{Auth::user()->adresse}}" class="form-control bg-light border-0" id="billingAddress" rows="3" placeholder="Address" required />
                                    <div class="invalid-feedback">
                                        Please enter a address
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input readonly type="text" name="country_client" value="{{Auth::user()->country}}" class="form-control bg-light border-0" id="billingTaxno" placeholder="Tax Number" required />
                                    <div class="invalid-feedback">
                                        Please enter a tax number
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input readonly type="text" name="ville_client" value="{{Auth::user()->ville}}" class="form-control bg-light border-0" id="billingTaxno" placeholder="Tax Number" required />
                                    <div class="invalid-feedback">
                                        Please enter a tax number
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <input readonly type="number" name="phone_client" value="{{Auth::user()->phone}}" class="form-control bg-light border-0" data-plugin="cleave-phone" id="billingPhoneno" placeholder="(123)456-7890" required />
                                    <div class="invalid-feedback">
                                        Please enter a phone number
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-sm-6 ms-auto">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div>
                                            <label for="shippingName" class="text-muted text-uppercase fw-semibold">Freelancer Address</label>
                                        </div>
                                        <div class="mb-2">
                                            <input type="hidden" name="id_freelancer" value="{{$prop->first()->id_user}}">
                                            <input type="text" name="name_freelancer" class="form-control bg-light border-0" readonly value="{{$prop->first()->name_user}}" id="shippingName" placeholder="Full Name" required />
                                            <div class="invalid-feedback">
                                                Please enter a full name
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <input type="text" class="form-control bg-light border-0" name="adresse_freelancer" readonly value="{{$prop->first()->adresse_user}}" id="shippingAddress"  placeholder="Address" required>
                                            <div class="invalid-feedback">
                                                Please enter a address
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <input type="text" readonly class="form-control bg-light border-0" name="country_freelancer" value="{{$prop->first()->country_user}}" data-plugin="cleave-phone" id="shippingPhoneno" placeholder="(123)456-7890" required />
                                            <div class="invalid-feedback">
                                                Please enter a phone number
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <input type="text" readonly class="form-control bg-light border-0" name="ville_freelancer" value="{{$prop->first()->ville_user}}" data-plugin="cleave-phone" id="shippingPhoneno" placeholder="(123)456-7890" required />
                                            <div class="invalid-feedback">
                                                Please enter a phone number
                                            </div>
                                        </div>
                                        <div>
                                            <input type="number" readonly value="{{$prop->first()->phone_user}}" name="phone_freelancer" class="form-control bg-light border-0" id="shippingTaxno" placeholder="Tax Number" required />
                                            <div class="invalid-feedback">
                                                Please enter a tax number
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <table class="invoice-table table table-borderless table-nowrap mb-0">
                                <thead class="align-middle">
                                <tr class="table-active">
                                    <th scope="col" style="width: 50px;">#</th>
                                    <th scope="col">
                                        Contract Details
                                    </th>
                                    <th scope="col" style="width: 120px;">
                                        <div class="d-flex currency-select input-light align-items-center">
                                            Rate
                                            <select class="form-selectborder-0 bg-light" name="currency" data-choices data-choices-search-false id="choices-payment-currency" onchange="otherPayment()">
                                                <option value="$">($)</option>
                                                <option value="£">(£)</option>
                                                <option value="₹">(₹)</option>
                                                <option value="€">(€)</option>
                                            </select>
                                        </div>
                                    </th>
                                    @if($prop->first()->price_categorie=='Fixed Price')
                                    <th scope="col" style="width: 120px;">Nombre of Weeks</th>
                                    @else
                                        <th scope="col" style="width: 120px;">Hour Number</th>
                                    @endif
                                    <th scope="col" class="text-end" style="width: 150px;">Amount</th>
                                    <th scope="col" class="text-end" style="width: 105px;"></th>
                                </tr>
                                </thead>
                                <tbody id="newlink">
                                <tr id="1" class="product">
                                    <th scope="row" class="product-id">1</th>
                                    <td class="text-start">
                                        <div class="mb-2">
                                            <input type="text" class="form-control bg-light border-0" name="title_projet" value="{{$prop->first()->title_projet}}" id="productName-1" placeholder="Product Name" required />
                                            <div class="invalid-feedback">
                                                Please enter a contractname
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <input type="text" class="form-control bg-light border-0" name="categorie" value="{{$prop->first()->categorie}}" id="productName-1" placeholder="Product Name" required />
                                            <div class="invalid-feedback">
                                                Please enter a contractname
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <input type="text" class="form-control bg-light border-0" name="sous_categorie" value="{{$prop->first()->sous_categorie}}" id="productName-1" placeholder="Product Name" required />
                                            <div class="invalid-feedback">
                                                Please enter a contractname
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <input type="text" class="form-control bg-light border-0" name="price_categorie" value="{{$prop->first()->price_categorie}}" id="productName-1" placeholder="Product Name" required />
                                            <div class="invalid-feedback">
                                                Please enter a contractname
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <input type="text" class="form-control bg-light border-0" name="price" value="{{$prop->first()->price}}" id="productName-1" placeholder="Product Name" required />
                                            <div class="invalid-feedback">
                                                Please enter a contractname
                                            </div>
                                        </div>

                                        <div class="mb-2">
                                            <input type="text" class="form-control bg-light border-0" name="type_price" value="{{$prop->first()->type_price}}" id="productName-1" placeholder="Product Name" required />
                                            <div class="invalid-feedback">
                                                Please enter a contractname
                                            </div>
                                        </div>
                                        @if($prop->first()->type_price=='Per semaine')
                                        <div class="mb-2">
                                            <input type="text" class="form-control bg-light border-0" name="semaine" value="{{$prop->first()->semaine}}" id="productName-1" placeholder="Product Name" required />
                                            <div class="invalid-feedback">
                                                Please enter a contractname
                                            </div>
                                        </div>
                                        @else
                                        <div class="mb-2">
                                            <input type="text" class="form-control bg-light border-0" name="data" value="{{$prop->first()->date}}" id="productName-1" placeholder="Product Name" required />
                                            <div class="invalid-feedback">
                                                Please enter a contractname
                                            </div>
                                        </div>
                                        @endif

                                    </td>
                                    <td>
                                        <input type="number"  class="form-control product-price bg-light border-0" name="price" value="{{substr($prop->first()->price, 1)}}" readonly id="productRate-1" step="0.01" placeholder="0.00" required />
                                        <div class="invalid-feedback">
                                            Please enter a rate
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-step">

                                                @if($prop->first()->type_price=='Per semaine')
                                             <input type="number"  class="product-quantity" id="product-qty-1" name="semaine" value="{{$prop->first()->semaine}}" >
                                                @else
                                               <input type="date"  class="product-quantity" id="product-qty-1" name="data" value="{{$prop->first()->date}}">
                                            @endif
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <div>
                                            @if($prop->first()->type_price=='Per semaine')
                                                <input type="number" class="form-control bg-light border-0 product-line-price" name="total_amount" value="{{substr($prop->first()->price, 1)*$prop->first()->semaine}}" id="productPrice-1" placeholder="$0.00"  />
                                            @else
                                                <input type="number" class="form-control bg-light border-0 product-line-price" name="price" value="{{substr($prop->first()->price, 1)}}" id="productPrice-1" placeholder="$0.00"  />
                                            @endif
                                        </div>
                                    </td>

                                </tr>
                                </tbody>
                                <tbody>
                                <tr id="newForm" style="display: none;"><td class="d-none" colspan="5"><p>Add New Form</p></td></tr>
                                <tr>

                                </tr>
                                <tr class="border-top border-top-dashed mt-2">
                                    <td colspan="3"></td>
                                    <td colspan="2" class="p-0">
                                        <table class="table table-borderless table-sm table-nowrap align-middle mb-0">
                                            <tbody>
                                            <tr class="border-top border-top-dashed">
                                                <th scope="row">Total Amount</th>
                                                <td>
                                                    @if($prop->first()->type_price=='Per semaine')
                                                    <input type="text" class="form-control bg-light border-0" name="price_global" id="cart-total" placeholder="$0.00" value="{{substr($prop->first()->price, 1)*$prop->first()->semaine}}" />
                                                    @else
                                                    <input type="text" class="form-control bg-light border-0" name="price" id="cart-total" placeholder="$0.00" value="{{substr($prop->first()->price, 1)}}" />
                                                    @endif
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <!--end table-->
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <!--end table-->
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-4">
                                <div class="mb-2">
                                    <label for="choices-payment-type" class="form-label text-muted text-uppercase fw-semibold">Payment Details</label>
                                    <div class="input-light">
                                        <select name="payment_details" required class="form-control bg-light border-0" data-choices data-choices-search-false data-choices-removeItem id="choices-payment-type">
                                            <option value="null">Payment Method</option>
                                            <option value="Mastercard">Mastercard</option>
                                            <option value="Credit Card">Credit Card</option>
                                            <option value="Visa">Visa</option>
                                            <option value="Paypal">Paypal</option>
                                        </select>
                                    </div>
                                    @if(session('payment_details_error'))
                                        <p class="text-danger">{{session('payment_details_error')}}</p>
                                    @endif
                                </div>
                                <div class="mb-2">
                                    <input name="card_holder_name" class="form-control bg-light border-0" type="text" id="cardholderName" placeholder="Card Holder Name" required>
                                </div>
                                <div class="mb-2">
                                    <input name="number_card" class="form-control bg-light border-0" type="text" id="cardNumber" placeholder="xxxx xxxx xxxx xxxx" required>
                                </div>
                                <div>
                                    @if($prop->first()->type_price=='Per semaine')
                                        <input type="text" class="form-control bg-light border-0" name="price_global" id="cart-total" placeholder="$0.00" readonly value="{{substr($prop->first()->price, 1)*$prop->first()->semaine}}" required />
                                    @else
                                        <input type="text" class="form-control bg-light border-0" name="price" id="cart-total" placeholder="$0.00" readonly value="{{substr($prop->first()->price, 1)}}" required />
                                    @endif
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                        <div class="mt-4">
                            <label for="exampleFormControlTextarea1" class="form-label text-muted text-uppercase fw-semibold">NOTES</label>
                            <textarea class="form-control alert alert-info" id="exampleFormControlTextarea1" placeholder="Notes" readonly rows="2" required>All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.</textarea>
                        </div>
                        <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                            <button type="submit" class="btn btn-success"><i class="ri-send-plane-fill align-bottom me-1"></i>Send contract</button>
                            <a href="javascript:void(0);" class="btn btn-primary"><i class="ri-download-2-line align-bottom me-1"></i> Download Contract</a>
                        </div>
                    </div>
                </form>
            </div>
        </div><!--end col-->
    </div>
</form>
    <!--end row-->
</div>
<script src="{{asset('FreeAssets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('FreeAssets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('FreeAssets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('FreeAssets/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('FreeAssets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
<script src="{{asset('FreeAssets/js/plugins.js')}}"></script>
<script src="{{asset('Freessets/lib/pages/invoicecreate.init.js')}}"></script>
<script src="{{asset('FreeAssets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('FreeAssets/js/app.js')}}"></script>
<!-- Inclure les fichiers CSS et JS de Flatpickr -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<!-- Créer l'élément input pour la sélection de la date et de l'heure -->
<input type="text" class="form-control bg-light border-0" id="date-field" data-provider="flatpickr" data-time="true" placeholder="Select Date-time">

<!-- Initialiser Flatpickr avec les options souhaitées -->
<script>
    flatpickr("#date-field", {
        enableTime: true, // Activer la sélection de l'heure
        dateFormat: "Y-m-d", // Format de la date et de l'heure
        defaultDate: "today", // Utiliser la date actuelle comme date par défaut
        minDate: "today", // La date minimale est aujourd'hui
        maxDate: new Date().fp_incr(7), // La date maximale est dans une semaine
        locale: {
            firstDayOfWeek: 1, // Premier jour de la semaine = lundi
            weekdays: {
                shorthand: ["Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam"],
                longhand: ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"],
            },
            months: {
                shorthand: ["Jan", "Fév", "Mar", "Avr", "Mai", "Juin", "Juil", "Août", "Sept", "Oct", "Nov", "Déc"],
                longhand: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"],
            },
        },
    });
</script>

</body>
</html>
