<div class="wrap" style="display: none;">
    <section class="section">
        <div class="card" role="form" aria-labelledby="signup-heading">
            <h2 id="signup-heading" style="margin:0 0 8px;font-size:20px;">Get the Washington edition</h2>
            <form id="signup-form" method="POST" action="/"> 
                <input type="hidden" name="recaptcha-token" id="recaptcha-token"> 
                <input type="text" id="b_check_1" name="b_check_1" style="display:none">
                <div class="form-row"> 
                    <input id="email" name="email" type="email" placeholder="you@domain.com" autocomplete="email" required aria-label="Email address"> 
                    <input style="display: none;" id="zip" name="zip" type="text" inputmode="numeric" pattern="[0-9]{5}" placeholder="ZIP (optional)" aria-label="ZIP code"> 
                    <button id="main-button" class="g-recaptcha btn" data-sitekey="6LcQiNcoAAAAAL2-vWb6oRtrRaIOoX1xqscP5NbZ" data-callback='submitSignup' data-action='submit'>Sign Up</button>
                </div>
                <p class="tiny">By subscribing, you agree to receive emails from Sports Cram. Unsubscribe anytime.</p>
            </form> 
            <noscript>
                <p class="tiny">Heads up: JavaScript is disabled. The form will submit without inline validation.</p>
            </noscript>
        </div>
    </section>
</div>
