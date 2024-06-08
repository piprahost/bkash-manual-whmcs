# bKash Payment Manual Gateway Module for WHMCS

Offline bKash payments are accepted on WHMCS by providing instructions for making a payment or sending money.

# What is bKash?

bKash offers fast, secure, and convenient mobile money transfer and payment services to the people of Bangladesh.

# Key features?

- Open source
- Lightweight
- Easy to setup
- Can be used for bKash personal, merchant & agent

# How to install and set up?

- Click on the ["Releases"](https://github.com/piprahost/bkash-manual-whmcs/releases) option on right side of this page, then choose the latest version and click `Source code (zip)` to download the module files.
- Upload the `bkash` folder and `bkash.php` file into `whmcs_dir > modules > gateways` using the hosting control panel or FTP. If there is already a `bkash` folder and a `bkash.php` file, remove it first.
- Find the payment gateway:
  - In WHMCS 8.6 and later, go to `Configuration () > Apps & Integrations.`
  - In WHMCS 8.0 to 8.6, go to `Configuration () > System Settings > Payment Gateways.`
  - In WHMCS 7.10 and earlier, go to `Setup > Payments > Payment Gateways.`
  - Click on the `Activate` button.
- You'll be redirected to the bKash configuration option. Please update the instructions according to your bKash account number and type personal or merchant.
- Finally, click on the `Save Changes` button.

_Happy Business :)_
