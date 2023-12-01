<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
        integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <title>Facture Demalma N°-{{ $numero }}</title>
    <style>
        /*! CSS Used from: https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css */
        h1 {
            font-size: 2em;
            margin: .67em 0;
        }

        strong {
            font-weight: inherit;
        }

        strong {
            font-weight: bolder;
        }

        img {
            border-style: none;
        }

        @media print {

            *,
            ::after,
            ::before,
            div::first-letter,
            div::first-line,
            p::first-letter,
            p::first-line {
                text-shadow: none !important;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }

            thead {
                display: table-header-group;
            }

            img,
            tr {
                page-break-inside: avoid;
            }

            p {
                orphans: 3;
                widows: 3;
            }

            .table {
                border-collapse: collapse !important;
            }

            .table td,
            .table th {
                background-color: #fff !important;
            }
        }

        *,
        ::after,
        ::before {
            -webkit-box-sizing: inherit;
            box-sizing: inherit;
        }

        h1,
        h6 {
            margin-top: 0;
            margin-bottom: .5rem;
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        img {
            vertical-align: middle;
        }

        table {
            border-collapse: collapse;
            background-color: transparent;
        }

        th {
            text-align: left;
        }

        h1,
        h6 {
            margin-bottom: .5rem;
            font-family: inherit;
            font-weight: 500;
            line-height: 1.1;
            color: inherit;
        }

        h1 {
            font-size: 2.5rem;
        }

        h6 {
            font-size: 1rem;
        }

        .display-4 {
            font-size: 3.5rem;
            font-weight: 300;
            line-height: 1.1;
        }

        .row {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        @media (min-width:576px) {
            .row {
                margin-right: -15px;
                margin-left: -15px;
            }
        }

        @media (min-width:768px) {
            .row {
                margin-right: -15px;
                margin-left: -15px;
            }
        }

        @media (min-width:992px) {
            .row {
                margin-right: -15px;
                margin-left: -15px;
            }
        }

        @media (min-width:1200px) {
            .row {
                margin-right: -15px;
                margin-left: -15px;
            }
        }

        .col-4,
        .col-5,
        .col-7,
        .col-8 {
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }

        @media (min-width:576px) {

            .col-4,
            .col-5,
            .col-7,
            .col-8 {
                padding-right: 15px;
                padding-left: 15px;
            }
        }

        @media (min-width:768px) {

            .col-4,
            .col-5,
            .col-7,
            .col-8 {
                padding-right: 15px;
                padding-left: 15px;
            }
        }

        @media (min-width:992px) {

            .col-4,
            .col-5,
            .col-7,
            .col-8 {
                padding-right: 15px;
                padding-left: 15px;
            }
        }

        @media (min-width:1200px) {

            .col-4,
            .col-5,
            .col-7,
            .col-8 {
                padding-right: 15px;
                padding-left: 15px;
            }
        }

        .col-4 {
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 33.333333%;
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        .col-5 {
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 41.666667%;
            -ms-flex: 0 0 41.666667%;
            flex: 0 0 41.666667%;
            max-width: 41.666667%;
        }

        .col-7 {
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 58.333333%;
            -ms-flex: 0 0 58.333333%;
            flex: 0 0 58.333333%;
            max-width: 58.333333%;
        }

        .col-8 {
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 66.666667%;
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%;
        }

        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 1rem;
        }

        .table td,
        .table th {
            padding: .75rem;
            vertical-align: top;
            border-top: 1px solid #eceeef;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #eceeef;
        }

        .table-sm td {
            padding: .3rem;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, .05);
        }

        .text-right {
            text-align: right !important;
        }

        /*! CSS Used from: Embedded */
        h6 {
            font-size: 1em;
        }

        .invoice {
            background: #fff;
            width: 100%;
            padding: 50px;
        }

        .logo {
            width: 4cm;
        }

        .document-type {
            text-align: right;
            color: #444;
        }

        .conditions {
            font-size: 0.7em;
            color: #666;
        }

        .bottom-page {
            font-size: 0.7em;
        }

        body {
            background: #ccc;
            padding: 30px;
            font-size: 0.6em;
        }

        h6 {
            font-size: 1em;
        }

        .container {
            width: 21cm;
            min-height: 29.7cm;
        }

        .invoice {
            background: #fff;
            width: 100%;
            padding: 50px;
        }

        .logo {
            width: 4cm;
        }

        .document-type {
            text-align: right;
            color: #444;
        }

        .conditions {
            font-size: 0.7em;
            color: #666;
        }

        .bottom-page {
            font-size: 0.7em;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="invoice">
            <div class="row">
                <div class="col-7">
                    <img src="{{ asset('template-assets/imgs/template/logo-demalma.svg') }}" class="logo" />
                </div>
                <div class="col-5">
                    <h1 class="document-type display-4">FACTURE</h1>
                    <p class="text-right"><strong th:text="${invoiceReference}">N° #{{ $numero }}</strong></p>
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <p class="addressMySam">
                        <strong>Demalma</strong><br />
                        3, rue assane ndoye x Berenger Feraud<br />
                        Dakar, Sénégal
                    </p>
                </div>
                <div class="col-5">
                    <br /><br /><br />
                    <p class="addressDriver">
                        <strong th:text="${driver.getCompanyName()}">Référence client</strong><br />

                        <span>{{ $demande->prenom . ' ' . $demande->nom }}</span> <br>
                        <span>{{ $demande->adresse_residence }}</span>
                    </p>
                </div>
            </div>
            <br />
            <br />
            <h6>Frais de services Demalma
                <!-- du <span th:text="${start}">date</span> au <span th:text="${end}">date</span> -->
            </h6>
            <br />
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Description</th>
                        <!--<th>Quantité</th>-->
                        <!--<th>Unité</th>-->
                        <!--<th>PU TTC</th>-->
                        <th>TVA</th>
                        <th class="text-right">Total HT</th>
                        <th class="text-right">Total TTC</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Demalma : {{ $demande->offre->designation }}</strong></td>
                        <!--<td>13</td>-->
                        <!--<td>Kilomètres</td>-->
                        <!--<td class="text-right">1,20€</td>-->
                        <td> - </td>
                        <td class="text-right"><strong>{{ number_format($demande->offre->montant, 0, ',', ' ') }} F
                                CFA</strong></td>
                        <td class="text-right"><strong>{{ number_format($demande->offre->montant, 0, ',', ' ') }} F
                                CFA</strong></td>
                    </tr>
                    <tr>
                        <td colspan="4">Dépot et Suivi du Dossier </td>
                        <!--<td>5</td>-->
                        <!--<td>Minutes</td>-->
                        <!--<td class="text-right">-10€</td>-->
                        <!-- <td>20%</td>
                <td class="text-right" >0,00€</td>
                <td class="text-right" th:text="${summaryPenalties.get('driverTTC')}">0,00€</td> -->
                    </tr>
                    <tr>
                        <td colspan="4">Retrait et livraison </td>
                        <!--<td>15</td>-->
                        <!--<td>Minutes</td>-->
                        <!--<td class="text-right">0,25€</td>-->
                        <!-- <td>20%</td>
                <td class="text-right" th:text="${summaryDriverPayment.get('mysamHT')}">0,00€</td>
                <td class="text-right" th:text="${summaryDriverPayment.get('mysamTTC')}">0,00€</td> -->
                    </tr>

                </tbody>
            </table>
            <div class="row">
                <div class="col-8">
                </div>
                <div class="col-4">
                    <table class="table text-right table-sm">
                        <tr>
                            <td><strong>Total HT</strong></td>
                            <td class="text-right">{{ number_format($demande->offre->montant, 0, ',', ' ') }} F CFA</td>
                        </tr>
                        <tr>
                            <td>TVA</td>
                            <td class="text-right"> 0 F CFA</td>
                        </tr>
                        <tr>
                            <td><strong>Total TTC</strong></td>
                            <td class="text-right">{{ number_format($demande->offre->montant, 0, ',', ' ') }} F CFA</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p class="conditions">
                En votre aimable règlement
                <br />
                Et avec nos remerciements.
                <br /><br />
                Conditions de paiement : paiement à réception de facture.
                <br />
                Aucun escompte consenti pour règlement anticipé.
                <br />

                {{--  
            Règlement par virement bancaire ou carte bancaire.
            <br/><br/>
            En cas de retard de paiement, indemnité forfaitaire pour frais de recouvrement : 40 euros (art. L.4413
            et
            L.4416 code du commerce). --}}
            </p>

            <br />
            <br />
            <br />
            <br />

            <p class="text-right bottom-page">
                Demalma Services <br>
                NINEA N° 81754802700017 RCS ALBI<br />
                3, rue assane ndoye x Berenger Feraud
                <br>
                +221 77 281 43 43 - www.demalma.sn<br />
                {{--  Code APE 6312Z - N° TVA Intracom. FR 63 817548027<br/> --}}
                <!--IBAN FR76 1470 7034 0031 4211 7882 825 - SWIFT CCBPFRPPMTZ-->
            </p>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            window.print()
  });
    </script>
</body>

</html>
