<?php include_once '../includes/header.php'; ?>
                <section id="donate">
                    
                    <article id="donateText" class="panelGold">
                        <hr class="blackhr" />
                        <h2>DONATE</h2>
                    </article>

                    <article id="donateExplanation" class="panelBlack">
                        <hr class="goldhr" />
                        <p>100% of your donation goes toward programs to help fight child sexual exploitation. All overhead for the organization is covered by our founders.</p>
                    </article>
                    
                    <div class="clear"></div>
                    
                    <article id="donateModule" class="panelRed">
                        <style type="text/css">
                                .panelRed .wepay-custom-button {
                                    background: transparent !important;
                                    border: none !important;

                                    -moz-box-shadow:        none !important;
                                    -webkit-box-shadow:     none !important;
                                    box-shadow:             none !important;

                                    width: 102px !important;
                                    height: 32px !important;
                                    margin: 0 auto !important;

                                    font-size: 10px !important;
                                    font-weight: bold !important;
                                    line-height: 1.25 !important;
                                    font-family: 'Varela', "Helvetica Neue", "HelveticaNeue", Helvetica, Arial, "Lucida Grande", sans-serif !important;
                                    letter-spacing: 1px !important;

                                }

                                input[type="text"].wepay-widget-input.donation-input-pay {
                                    margin: 10px auto 0 !important;
                                    height: 23px !important;
                                    padding: 2px 6px 2px 24px;
                                    background: white url(../images/doller.png) scroll 6px 3px no-repeat !important;
                                    /*background-size: 20px;*/
                                }


                            </style>
                            <!--[if IE]>
                                <style type="text/css">
                                    #newsletterContainer .panelRed {
                                        margin-left: 0;
                                        float: right;
                                    }

                                    #newsletterContainer .three .panelRed .wepay-custom-button {
                                        background: transparent !important;
                                        filter: none;
                                        border: none !important;

                                        -moz-box-shadow:        none !important;
                                        -webkit-box-shadow:     none !important;
                                        box-shadow:             none !important;

                                        width: 102px !important;
                                        height: 32px !important;
                                        margin-left: -20px !important;
                                        padding-right: 0;

                                        font-size: 10px !important;
                                        font-weight: bold !important;
                                        line-height: 1.25 !important;
                                        font-family: 'Varela', "Helvetica Neue", "HelveticaNeue", Helvetica, Arial, "Lucida Grande", sans-serif !important;
                                        letter-spacing: 1px !important;
                                    }

                                    input[type="text"].wepay-widget-input.donation-input-pay {
                                        margin-left: -7px;
                                    }
                                </style>
                            <![endif]-->
                            <a class="wepay-widget-button wepay-green wepay-custom-button" id="wepay_widget_anchor_50a1e2306d177" href="https://www.wepay.com/donations/1810764396">DONATE</a><script type="text/javascript">var WePay = WePay || {};WePay.load_widgets = WePay.load_widgets || function() { };WePay.widgets = WePay.widgets || [];WePay.widgets.push( {object_id: 1810764396,widget_type: "donation_campaign",anchor_id: "wepay_widget_anchor_50a1e2306d177",widget_options: {donor_chooses: true,allow_cover_fee: true,enable_recurring: true,allow_anonymous: true,button_text: "Donate"}});if (!WePay.script) {WePay.script = document.createElement('script');WePay.script.type = 'text/javascript';WePay.script.async = true;WePay.script.src = 'https://static.wepay.com/min/js/widgets.v2.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(WePay.script, s);} else if (WePay.load_widgets) {WePay.load_widgets();}</script>
                    </article>

                    <article id="partners" class="panelDarkgrey">
                        <hr class="lightGreyhr" />
                        <div id="boardExpanded">
                            <h3>THANKS TO OUR PRO BONO PARTNERS</h3>
                            <ul>
                                <li>Goodby Silverstein & Partners</li>
                                <li>Wilson Sonsini</li>
                                <li>Altman, Greenfield & Selvaggi</li>
                                <li>Conversion Voodoo</li>
                                <li>Google</li>
                                <li>Microsoft</li>
                                <li>Facebook</li>
                                <li>Blekko</li>
                                <li>Dr. Michael Seto</li>
                            </ul>
                        </div>
                    </article>
                    
                    <div class="clear"></div>

                </section>
                
                <?php include_once '../includes/footer.php'; ?>
            </div>
            <?php include_once '../includes/sidebar.php'; ?>
                
<?php include_once '../includes/end.php'; ?>
