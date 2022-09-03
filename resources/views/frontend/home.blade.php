<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
   <!-- this is head meta and css section  -->
   @include('frontend.includes.head')
</head>

<body>
   <!-- this is modal section  -->
   @include('frontend.includes.modal')
   <!-- this is quick view section  -->
   @include('frontend.includes.quick')
    <header class="header-area header-style-1 header-height-2">
        <div class="mobile-promotion">
            <span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>
        </div>
           <!-- this is top header section  -->
           @include('frontend.includes.topheader')
      <!-- this is middle header section  -->
      @include('frontend.includes.midheader')

        <!-- this is the buttom header  -->
        @include('frontend.includes.buttomheader')
    </header>
       <!-- this is mobile header , when responsive then it,s work  -->
       @include('frontend.includes.mobileheader')
    <!--End header-->
           <!-- this is main section  -->
           @include('frontend.includes.main')
           
      <!-- this is footer section  -->
      @include('frontend.includes.footer')
    <!-- this is preloader section  -->
    @include('frontend.includes.preloader')
   <!-- this javascript section  -->
   @include('frontend.includes.js')
</body>

</html>