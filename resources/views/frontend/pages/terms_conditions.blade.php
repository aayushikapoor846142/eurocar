@extends('layouts.app')

@push('styles')
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- WOW ANIMATION STYLE SHEET -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- LC LIGHT BOX POPUP -->
    <link rel="stylesheet" href="{{ asset('assets/css/lc_lightbox.css') }}">
    <!-- FEATHER ICON SHEET -->
    <link rel="stylesheet" href="{{ asset('assets/css/feather.css') }}">
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <!-- SWIPER Slider -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!-- DATETIMEPICKER STYLE SHEET -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endpush

@section('content')
     @include('frontend.partials.header')
   <!-- CONTENT START -->
       <div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr site-bg-dark twm-primary-overlay-wrap" style="background-image: url({{ asset('assets/images/banner-12.jpg') }});">
                <div class="twm-primary-overlay"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="wt-title">Terms and Conditions</h2>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
            <!-- INNER PAGE BANNER END -->   


            <!-- Contact Form SECTION START -->
           <div class="section-full p-t80 p-b80 site-bg-white twm-contact-section-wrap">

                <div class="container">

                    <div class="section-content">
                        <div class="terms_conditions-section">
 <h3>Obligations of the provider</h3>
<p>The Provider undertakes to: 
<br>a.) in the case of confirmation of the order, to pick up the person/persons at the Place of commencement of the transport and arrange for their transport to the Place of completion of the transport, 
  
  <br>b.) in the event of an impossibility to appear at the Place of commencement of the transport, the Provider is obliged to inform the Customer without further delay and agree on the next course of action. 
  
  <br>c.) The legal relationship between the Customer and the Provider, unless a written contract is signed between them, arises at the moment when the Provider accepts the Customer’s order. This moment creates the obligation of the Provider to provide the transport of the person(s) and the Customer’s obligation to pay the price under these Terms and Conditions and the Price List of the Provider. 
  
  <br>d.) The Provider may fulfill its obligation using another Provider and at the same time the Customer agrees that it may use any third party to fulfill the obligation and thus subcontract all or any part of the transport and other services under such conditions as determined by the Provider.</p>
  <h3>Customer obligations</h3>
  <p>The customer undertakes to: 

    <br>a.) if he wants to use the services of the Provider, order transport in the specified way, i.e. by phone or electronic (email), online form. 
    
    <br>b.) indicate in the order your name, e-mail and telephone number; further specify in the order the address of the Place of commencement of the transport and the time of collection and the place of completion of the transport. 
    
    <br>c.) provide the Provider with correct information about the Place of commencement of the transport and the exact time of collection; in the event of a breach of this obligation, the Provider is not responsible for the failure to appear at the Place of commencement of the transport in a timely manner. <br></p>
 <h3>Prices for transport and payment terms</h3>
 <p>a.) The Customer is obliged to familiarize himself with the current Price List of the Provider, who is accessible on a publicly accessible information system (Internet). 
  <br>b.) The Customer is obliged to pay the price for transport under these Terms and Conditions according to the current Price List of the Provider, unless otherwise stipulated in writing. <br>
</p>
<h3>Complaint and cancellation of the order</h3>
<p>a.) If the Customer finds that the provided services show defects in the quality or scope of the services provided, he has the right to claim these defects. Complaints must be resolved without undue delay after the detection of the defect, no later than 10 days after the execution of the shipment. 
  <br>b.) The complaint within the meaning of the previous paragraph must be in writing or in electronic form and must contain an accurate description of the damage caused and must be delivered to the Provider within the period according to the previous paragraph 
  
  <br>c.) If the Customer does not apply his claims within the time and in the manner set out in this Article, the transport is valid that was carried out on time and properly. 
  
  <br>d.) If the Customer cancels the order, the money will be refunded to his/her account in the case of online payment. In the event of an invoice payment or payment based on an invoice, the order will be cancelled without cancellation fees. 
  
  <br>Procedure for handling a complaint: 
  
  <br>a.) If it is not possible to settle the complaint immediately, it is necessary to write a complaint statement with the Customer, which must be signed by the Customer and the carrier who is entitled to do so. 
  
  <br>b.) The customer is obliged to submit true information regarding the complaint about the defects of the provided service and also the cooperation necessary in handling the complaint. 
  
  <br>c.) The justification of the claim for defects will be decided by the authorized employee or other authorized person designated to settle the complaint immediately, in complex cases within three working days. 
  
  <br>d.) The Provider is obliged to inform the Customer in writing of the status of the complaint settlement no later than 30 days after its application, i.e. from receipt of the documents by the Customer. These are mainly defects related to the expert assessment of the complaint. <br></p>
<h3>Relationship to the legislation of the Slovak Republic and litigation</h3>
<p>a.) All legal relationships arising between the Provider and the Customer are governed by the legislation of the Slovak Republic. In matters not regulated by the contract or these Terms and Conditions, the relevant provisions of the Commercial Code shall apply. 

  <br>b.) Authently, the Terms and Conditions and the relationship to different statements or documents 
  
  <br>c.) These Terms and Conditions shall prevail over any different declaration by persons acting on behalf of the Provider, unless this different statement is made in writing and signed by a person who is entitled to act on behalf of the Provider under the relevant legislation. 
  
  <br>d.) These Terms and Conditions apply only if the written contract does not stipulate otherwise. 
  
  <br>e.) These Terms and Conditions are published on a publicly accessible information system with the possibility of remote access (Internet), at www.transferservice.sk. In the event of a conflict between the written draft Terms and Conditions and their version published on the publicly accessible information system (Internet), the version published on the publicly accessible information system (Internet) shall prevail, which is the only authentic version of the Terms and Conditions. <br></p>
  <h3>Protection of personal data</h3>
  <p>a.) When registering, the customer provides the data necessary for its identification in the online system, which allows you to transfer the necessary accounting operations, to make a tax document. 

    <br>b.) The Provider undertakes to handle and handle the Customer’s personal data in accordance with the applicable legislation, collect them only for the above purpose and to improve its services. 
    
    <br>c.) By using the online system, the Customer agrees to collect and use the information about him under the conditions set out above.</p>
                        </div>
                    </div>

                </div>
                
            </div>   
            <!-- Contact Form SECTION END -->
<!-- 
            <div class="gmap-outline">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6309.495304446196!2d-122.43885472228101!3d37.74906395235639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f7e12a1d66d03%3A0xb8c905ae4e81369b!2sQ-Architecture!5e0!3m2!1sen!2sin!4v1623689156327!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>  -->

 
        </div>
<!-- CONTENT END -->

         @include('frontend.partials.footer')
    </div>
    
    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/lc_lightbox.lite.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    
    @stack('scripts')
@endsection
