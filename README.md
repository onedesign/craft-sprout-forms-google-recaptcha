# Google reCAPTCHA for Sprout Forms

> This is a forked version that's been modified to support environment variables for Google Site Key and Secret Key.

### Modifies files

###### src/templates/_integrations/sproutforms/captchas/GoogleRecaptcha/settings.twig, lines 3-23
- Changes field type from `textField` to `autosuggestField`
- Adds `suggestEnvVars: true` to field config

###### src/integrations/sproutforms/captchas/GoogleRecaptcha.php, lines 119-120
- Wraps `$this->siteKey` and `$this->secretKey` values in the `Craft::parseEnv()` function

### Get upsteam updates
1. Add the upstream repo to your remotes with `git remote add upstream https://github.com/barrelstrength/craft-sprout-forms-google-recaptcha.git`
2. `git pull upstream <branch_name>`

***

### Add Google reCAPTCHA spam prevention to Sprout Forms 

- [Documentation](https://sprout.barrelstrengthdesign.com/docs/forms/)
- [Craft Plugin Store](https://plugins.craftcms.com/sprout-forms-google-recaptcha)
- [Open an Issue](https://github.com/barrelstrength/craft-sprout-forms-google-recaptcha/issues)
- [Contact Support](https://sprout.barrelstrengthdesign.com/docs/support/support.html)

<a href="https://sprout.barrelstrengthdesign.com" target="_blank">
  <img src="https://s3.amazonaws.com/sprout.barrelstrengthdesign.com-assets/content/plugins/sprout-icon.svg" width="72" height="72" align="right">
</a>
