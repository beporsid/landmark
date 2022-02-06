<div class="section section-overlay section-bg-10 pt-7 pb-9">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-11 text-center">
                    <h2 class="white text-uppercase mb-3">ارسال پیام</h2>
                </div>
                <div class="agent-contact">
                    <div class="box-form">
                        <form class="box-contact-agent" method="post" action="/agents">
                            @csrf
                            <div class="row">
                                <div class="item-wrap col-sm-4 col-xs-12">
                                    <input type="text" name="name" placeholder="نام *">
                                </div>
                                <div class="item-wrap col-sm-4 col-xs-12">
                                    <input type="text" name="mobile" placeholder="تلفن" dir="ltr">
                                </div>
                                <div class="item-wrap col-sm-4 col-xs-12">
                                    <input type="text" name="email" placeholder="* ایمیل" dir="ltr">
                                </div>
                            </div>
                            <div class="row">
                                <div class="item-wrap form-textarea col-md-12">
                                    <textarea name="message" placeholder="پیام شما *"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="item-wrap form-action text-center col-md-12">
                                    <button type="submit" class="button-2">
                                        <span>ارسال پیام</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
