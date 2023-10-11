<div class="divider-two"></div>
<div class="container" data-bs-spy="scroll"  data-bs-target="navbar-scroll" data-bs-offset="0" tabindex="0">
    <h1 id="contact" class="pb-2 border-bottom custom-header"> Contact Us </h1>
</div>
<div class="container">

    <section style="padding-top: 60px">

        <div class="container contact-us">
            <div class="row justify-content-end contact-us-form me-4">

                <div class="col-md-5">
                    <h3 class="contact-us-texts">Let's get in touch</h3>
                    <p class="">We're open to answer any query of your's.</p>
                    <div class="row">
                        <div class="col-md-1">
                            <img src="{{ asset('page_Images/svg/location.svg') }}" class="contacts-svg-loc" alt=""> 
                        </div>
                        <div class="col">
                            <p> 970 khandaker( 1st floor ) mansion,east shewrapara, Mirpur, Dhaka 1216</p>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-1">
                            <img src="{{ asset('page_Images/svg/phone.svg') }}" class="contacts-svg-pho" alt=""> 
                        </div>
                        <div class="col">
                            <p>+88017********</p>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-1">
                            <img src="{{ asset('page_Images/svg/mail_2.svg') }}" class="contacts-svg-mai" alt=""> 
                        </div>
                        <div class="col">
                            <p class="contacts-mail">admin@manhafabrics.ltd</p>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-1">
                            <img src="{{ asset('page_Images/svg/youtube.svg') }}" class="contacts-svg-vid" alt=""> 
                        </div>
                        <div class="col">
                            <p class="">Watch our videos</p>
                        </div>
                        
                    </div>
                        
                         
                    
                    
                </div>
                <div class="col-md-6 ">
                    
                    <div class="form-control contacts-form">
                        

                        <div class="card-body">
                            @if (Session::has('message_sent'))
                                <div class="alert alert-success">
                                    {{ Session::get('message_sent') }}
                                </div>
                                
                            
                                
                            @endif
                            <form class="contacts-form" method="POST" enctype="multipart/form-data" action="{{ route('Contact.contactUs') }}">

                                @csrf
                                <div class="form-group gogo">
                                    <label class=" mb-2 mt-4" for="name">Name</label>
                                    <input type="text" name="name" class="form-control mb-3" placeholder="Enter Your Name">
                                </div>
                                <div class="form-group">
                                    <label class=" mb-2" for="email">Email</label>
                                    <input type="text" name="email" class="form-control mb-3" placeholder="someone@example.com">
                                </div>
                                <div class="form-group">
                                    <label class=" mb-2" for="phone">Phone</label>
                                    <input type="text" name="phone" class="form-control mb-3" placeholder="Phone Number">
                                </div>

                                <div class="form-group">
                                    <label class=" mb-2" for="msg">Message</label>
                                    <textarea name="msg" class="form-control mb-3" placeholder="How may we help you?"></textarea>
                                </div>
                                <button type="submit" class="btn btn-dark float-right">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

</div>