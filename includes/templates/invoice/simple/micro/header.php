<?php
/**
 * PDF invoice header template that will be visible on every page.
 *
 * This template can be overridden by copying it to youruploadsfolder/woocommerce-pdf-invoices/templates/invoice/simple/yourtemplatename/header.php.
 *
 * HOWEVER, on occasion WooCommerce PDF Invoices will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @author  Bas Elbers
 * @package WooCommerce_PDF_Invoices/Templates
 * @version 0.0.1
 */
?>

<div class="top">
	<table>
		<tr>
			<td class="logo">
				<?php
				if ( WPI()->get_option( 'template', 'company_logo' ) ) {
					printf( '<img class="company-logo" src="var:company_logo" style="max-height:150px;"/>' );
				} else {
					printf( '<h1 class="company-name">%s</h1>', esc_html( WPI()->templater()->get_option( 'bewpi_company_name' ) ) );
				}
				?>
			</td>
			<td class="info">
				<?php
				echo WPI()->get_formatted_company_address();
				echo WPI()->get_formatted_company_details();
				?>
			</td>
		</tr>
	</table>
</div>