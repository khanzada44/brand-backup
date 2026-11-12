<label class="field"><input type="text" name="name" placeholder=" " autocomplete="name" required minlength="<?= form_rules()['name_min'] ?>" maxlength="<?= form_rules()['name_max'] ?>"><span>Full name *</span></label>
        <label class="field"><input type="email" name="email" placeholder=" " autocomplete="email" required maxlength="<?= form_rules()['email_max'] ?>"><span>Email address *</span></label>
        <label class="field field--full"><input type="tel" name="phone" placeholder=" " autocomplete="tel" required maxlength="40"><span>Phone number *</span></label>
