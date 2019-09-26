// JavaScript Document

function validacao() {
	
	if(document.form.nome.value=="") {
		alert("Preencha o campo nome!")
		document.form.nome.focus();
		return false;
	}
	
	if(document.form.email.value=="" || document.form.email.value.indexOf('@')==-1 || document.form.email.value.indexOf('.')==-1) {
		alert("Email Inválido!")
		document.form.email.focus();
		return false;
	}
	
	if(document.form.fone.value=="") {
		alert("Preencha o campo Fone!")
		document.form.fone.focus();
		return false;
	}
	
	if(document.form.assunto.value=="") {
		alert("Preencha o campo Assunto!")
		document.form.assunto.focus();
		return false;
	}
	
	if(document.form.mensagem.value=="") {
		alert("Preencha o campo Mensagem!")
		document.form.mensagem.focus();
		return false;
	}
}