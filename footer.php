    </div>
    <footer class="footer">
        <div class="wrap legal"> 
            <a href="https://www.sportscram.com/privacy-policy" target="_blank">Privacy Policy</a>
            | <a href="https://www.sportscram.com/terms-of-service" target="_blank">Terms of Service</a> <br>
            <p>&copy; <span id="year"></span> Sports Cram, LLC. All rights reserved.</p>
        </div>
    </footer>
    <script>document.getElementById("year").textContent = new Date().getFullYear(); let isSubmitting = false; function submitSignup(token) {
            if (isSubmitting) return; isSubmitting = true; let form = document.getElementById('signup-form'); if (!form.checkValidity()) { form.reportValidity(); return; }
            document.getElementById('init').style.display = 'none'; document.getElementById('thank-you').style.display = 'block'; document.getElementById('recaptcha-token').value = token; let formData = new FormData(form); formData.append('action', 'handle_recaptcha_form_v3'); document.getElementById('main-button').disabled = true; document.getElementById('main-button').innerHTML = 'Submitting...'; fetch('https://www.sportscram.com/wp-admin/admin-ajax.php', { method: 'POST', body: formData }).then(response => response.json()).then(data => { if (data.success) { let email = document.getElementById('email').value; $.ajax({ type: 'POST', url: 'https://app.sportscram.com/register', data: JSON.stringify({ email, mode: 'landing-page-dc', "football_nfl_teams": [{ "displayName": "Washington Commanders", "id": "28" }] }), contentType: 'application/json', success: function () { }, error: function () { } }); } else { document.getElementById('init').style.display = 'block'; document.getElementById('thank-you').style.display = 'none'; document.getElementById('error-section').style.display = 'block'; } }).catch(() => { });
        }</script>
    <script>(function () { function c() { var b = a.contentDocument || a.contentWindow.document; if (b) { var d = b.createElement('script'); d.innerHTML = "window.__CF$cv$params={r:'98ce459d8917594f',t:'MTc2MDE4NDgxMS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);"; b.getElementsByTagName('head')[0].appendChild(d) } } if (document.body) { var a = document.createElement('iframe'); a.height = 1; a.width = 1; a.style.position = 'absolute'; a.style.top = 0; a.style.left = 0; a.style.border = 'none'; a.style.visibility = 'hidden'; document.body.appendChild(a); if ('loading' !== document.readyState) c(); else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c); else { var e = document.onreadystatechange || function () { }; document.onreadystatechange = function (b) { e(b); 'loading' !== document.readyState && (document.onreadystatechange = e, c()) } } } })();</script>
    <?php wp_footer(); ?>
</body>

</html>
