<?
require("funcoes.php");
$foto = $_GET["foto"];
if(strlen($foto) == 0) $foto = "imagens/foto_1.jpg";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Century Foto e Video</title>
		<style type="text/css">
			body{
				margin: 0px 0px 0px 0px;
				background-color:#333333;
			}
		</style>
		<script language="javascript">
			var audio = new Audio('clic.wav');

			function toca_som(){
				audio.play();
			}
			function troca_fundo(imagem){
				document.getElementById('foto').style.backgroundImage = imagem;			
			}
		</script>
	</head>
	
	<body>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td align="center" valign="top">
					<table width="766" cellpadding="0" cellspacing="0">
						<tr>
							<td width="100%" valign="top">
								<table width="100%" cellpadding="0" cellspacing="0" border="0" id="foto" style="background-image:url(<?=$foto?>);">
									<tr>
										<td colspan="4" background="imagens/cabecalho.gif" height="119">&nbsp;</td>
									</tr>
									<tr>
										<td align="center" colspan="2" background="imagens/logo.gif" height="149">
											<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="140" Height ="81">
												<param name=movie value="imagens/logo.swf">
												<param name=quality value=high>
												<PARAM NAME=menu VALUE=false>
												<embed src="imagens/logo.swf" quality=high pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="140" Height ="81"></embed>
											</object>
										</td>
										<td>&nbsp;</td>
										<td width="54" background="imagens/lateral2_fotos.gif">&nbsp;</td>
									</tr>
									<tr>
										<td width="57" background="imagens/lateral_fotos.gif" height="113">&nbsp;</td>
										<td width="202" align="left">
											<table width="75%" border="0">
												<tr>
													<td><a href="Javascript: troca_fundo('url(imagens/foto_1.jpg)');"><img onmouseover="this.style.filter = 'Invert'; toca_som();" onmouseout="this.style.filter = '';" border="0" src="imagens/thumb1.gif" /></a></td>
													<td><a href="Javascript: troca_fundo('url(imagens/foto_2.jpg)');"><img onmouseover="this.style.filter = 'Invert'; toca_som();" onmouseout="this.style.filter = '';" border="0" src="imagens/thumb2.gif" /></a></td>
													<td><a href="Javascript: troca_fundo('url(imagens/foto_3.jpg)');"><img onmouseover="this.style.filter = 'Invert'; toca_som();" onmouseout="this.style.filter = '';" border="0" src="imagens/thumb3.gif" /></a></td>
												</tr>
												<tr>
													<td><a href="Javascript: troca_fundo('url(imagens/foto_4.jpg)');"><img onmouseover="this.style.filter = 'Invert'; toca_som();" onmouseout="this.style.filter = '';" border="0" src="imagens/thumb4.gif" /></a></td>
													<td><a href="Javascript: troca_fundo('url(imagens/foto_5.jpg)');"><img onmouseover="this.style.filter = 'Invert'; toca_som();" onmouseout="this.style.filter = '';" border="0" src="imagens/thumb5.gif" /></a></td>
													<td><a href="Javascript: troca_fundo('url(imagens/foto_6.jpg)');"><img onmouseover="this.style.filter = 'Invert'; toca_som();" onmouseout="this.style.filter = '';" border="0" src="imagens/thumb6.gif" /></a></td>
												</tr>
												<tr>
													<td><a href="Javascript: troca_fundo('url(imagens/foto_7.jpg)');"><img onmouseover="this.style.filter = 'Invert'; toca_som();" onmouseout="this.style.filter = '';" border="0" src="imagens/thumb7.gif" /></a></td>
													<td><a href="Javascript: troca_fundo('url(imagens/foto_8.jpg)');"><img onmouseover="this.style.filter = 'Invert'; toca_som();" onmouseout="this.style.filter = '';" border="0" src="imagens/thumb8.gif" /></a></td>
													<td><a href="Javascript: troca_fundo('url(imagens/foto_9.jpg)');"><img onmouseover="this.style.filter = 'Invert'; toca_som();" onmouseout="this.style.filter = '';" border="0" src="imagens/thumb9.gif" /></a></td>
												</tr>
											</table>
										</td>
										<td>&nbsp;</td>
										<td background="imagens/lateral2_fotos.gif">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="2" background="imagens/rodape_fotos.gif" height="33">&nbsp;</td>
										<td>&nbsp;</td>
										<td background="imagens/lateral2_fotos.gif">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="2" background="imagens/fundo_menu.gif" height="100" align="center" valign="top">
											<div style="position:absolute; margin-left: 48px;"><? constroi_menu(); ?></div>
										</td>
										<td>&nbsp;</td>
										<td background="imagens/lateral2_fotos.gif">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="2" background="imagens/rodape_menu.gif" height="72">&nbsp;</td>
										<td>&nbsp;</td>
										<td background="imagens/nao_sei.gif">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" background="imagens/rodape.gif" height="57" align="right">
											<span style="text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:10px; color:#CCCCCC; padding-right: 87px">Century&copy; Foto e Video &bull; Desenvolvido por <a style="color: red" target="_blank" href="http://www.devhouse.com.br">DevHouse</a></span>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>
