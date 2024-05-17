<?php 
require_once "controllercomm.php";
require_once "commandem.php";

$m = new conco();

if (isset($_POST["nom"], $_POST["email"], $_POST["tel"], $_POST["adress"])) {
    if (!empty($_POST["nom"]) && !empty($_POST["email"]) && !empty($_POST["tel"]) && !empty($_POST["adress"])) {
        $nom = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['email']);
        $tel = htmlspecialchars($_POST['tel']);
        $adres = htmlspecialchars($_POST['adress']);
        
        $panier = new commandeM(null, $email, $tel, $nom, $adres);
        
        $m->addcomm($panier);
       header('Location: manipulation.php');
        exit();
    }
}
?>

<html lang="fr" class="supernova "><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta property="og:title" content="Modèle Bon de Commande Produits">
<meta property="og:url" content="https://form.jotform.com/241296813417560">
<meta property="og:description" content="Please click the link to complete this form.">
<meta name="slack-app-id" content="AHNMASS8M">
<meta property="og:tel" content="https://cdn.jotfor.ms/assets/img/landing/opengraph.png">

<link rel="apple-touch-icon" href="https://cdn.jotfor.ms/assets/img/favicons/favicon-2021-light%402x.png">
<script>
          var favicon = document.querySelector('link[rel="shortcut icon"]');
          window.isDarkMode = (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches);
          if(favicon && window.isDarkMode) {
              favicon.href = favicon.href.replaceAll('favicon-2021-light%402x.png', 'favicon-2021-dark%402x.png');
          }
      </script><link rel="canonical" href="https://form.jotform.com/241296813417560">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1">
<meta name="HandheldFriendly" content="true">
<title> Bon de Commande Produits</title>
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/stylebuilder/static/form-common.css?v=ba73e27
">
<style type="text/css">@media print{*{-webkit-print-color-adjust: exact !important;color-adjust: exact !important;}.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.53773&amp;themeRevisionID=5f7ed99c2c2c7240ba580251">
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_styles.css?3.3.53773">
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/css/styles/payment/payment_feature.css?3.3.53773">
<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  /*PREFERENCES STYLE*/
  /* NEW THEME STYLE */
  .form-header-group .form-header,
  .appointmentCalendarContainer .monthYearPicker .pickerItem select,
  .appointmentCalendarContainer .currentDate,
  .appointmentCalendar .calendarDay {
    color: #00708D;
  }
  li[data-type=control_fileupload] .qq-upload-button {
    color: #00708D;
  }
  .signature-wrapper, .signature-wrapper .pad, .jSignature, .signature-pad-passive, .signature-pad-wrapper {
    color: #00708D;
  }
  .form-dropdown,
  .form-textarea,
  .form-textbox,
  .form-checkbox-item .form-checkbox + label:before, .form-radio-item .form-radio + label:before,
  .form-radio-item .form-radio + span:before, .form-checkbox-item .form-checkbox + span:before,
  .rating-item label,
  .signature-pad-passive,
  .signature-wrapper,
  .form-radio-other-input, .form-checkbox-other-input, .form-captcha input, .form-spinner input,
  .appointmentCalendarContainer {
    border-color: #00708D;
    background-color: #FFFFFF;
  }
  .form-matrix-column-headers, .form-matrix-table td,
  .form-matrix-table td:last-child, .form-matrix-table th,
  .form-matrix-table th:last-child, .form-matrix-table tr:last-child td,
  .form-matrix-table tr:last-child th,
  .form-matrix-table tr:not([role=group])+tr[role=group] th,
  .form-matrix-column-headers, .form-matrix-table td,
  .form-matrix-table td:last-child, .form-matrix-table th,
  .form-matrix-table th:last-child, .form-matrix-table tr:last-child td,
  .form-matrix-table tr:last-child th,
  .form-matrix-table tr:not([role=group])+tr[role=group] th,
  .form-matrix-headers.form-matrix-column-headers,
  .appointmentCalendarContainer .monthYearPicker .pickerItem+.pickerItem,
  .appointmentCalendarContainer .monthYearPicker,
  .isSelected .form-matrix-column-headers:nth-last-of-type(2),
  li[data-type=control_fileupload] .qq-upload-button {
    border-color: #00708D;
  }
  li[data-type="control_datetime"] .extended .allowTime-container + .form-sub-label-container {
    background-color: #FFFFFF;
    color: #00708D;
  }
  .form-subHeader, .form-sub-label {
    color: #00708D;
  }
  li[data-type=control_fileupload] .qq-upload-button {
    background-color: #FFFFFF;
  }
  .form-matrix-values {
    background-color: #FFFFFF;
  }
  .rating-item label {
    color: #00708D;
  }
  .rating-item input:focus+label, .rating-item input:hover+label {
    color: #ffffff;
    background-color: #86C8D9;
    border-color:  #01485A;
  }
  .form-checkbox + label:before, .form-radio + label:before,
  .form-radio + span:before, .form-checkbox + span:before {
    background-color: #FFFFFF;
    border-color: #00708D;
    color: #FFFFFF;
  }
  .form-radio-item .form-radio:checked+label:before, form-radio-item .form-radio:checked+span:before,
  .form-radio:checked+label:before,
  .form-checkbox:checked+label:before {
    border-color: #01485A;
  }
  .form-radio-item .form-radio:checked+label:after, form-radio-item .form-radio:checked+span:after {
    background-color: #01485A;
    border-color:  #00708D;
    color: #ffffff;
  }
  input.form-radio:checked + label:after,
  input.form-checkbox:checked+label:after,
  .form-line[data-payment="true"] .form-product-item .p_checkbox .checked {
    background-color: #01485A;
    border-color:  #00708D;
    color: #ffffff;
  }
  .rating-item input:checked+label {
    background-color: #01485A;
    border-color:  #00708D;
    color: #ffffff;
  }
  .appointmentDayPickerButton:hover {
    background-color: #01485A;
  }
  .form-dropdown:focus, .form-textarea:focus, .form-textbox:focus, .form-checkbox:focus + label:before, .form-radio:focus + label:before {
    border-color: #01485A;
    box-shadow: #F1F5FF;
  }
  .appointmentCalendarContainer,
  .appointmentSlot,
  .rating-item-title.for-to > label:first-child,
  .rating-item-title.for-from > label:first-child,
  .rating-item-title .editor-container * {
    background: none;
  }
  .rating-item-title.for-to > label:first-child,
  .rating-item-title.for-from > label:first-child,
  .rating-item-title .editor-container * {
    color: #20819B;
  }
  .JotFormBuilder .appContainer #app li.form-line[data-type=control_matrix].isSelected .questionLine-editButton.forRemove:after,
  .JotFormBuilder .appContainer #app li.form-line[data-type=control_matrix].isSelected .questionLine-editButton.forRemove:before {
    background-color: #FFFFFF;
  }
  .appointmentSlot,
  .appointmentCalendar .calendarDay.isToday .calendarDayEach {
    color: #01485A;
    border-color: #01485A;
  }
  .appointmentSlot:not(.disabled):not(.active):hover {
    background-color: #86C8D9;
  }
  .form-textbox::placeholder,
  .form-dropdown:not(.time-dropdown):not(:required),
  .form-dropdown:not(:required),
  .form-dropdown:required:invalid {
    color: #83D0E4;
  }
  li[data-type=control_fileupload] .jfUpload-heading {
    color:#7EA8BA;
  }
  .appointmentCalendar .calendarDay:not(.empty):hover .calendarDayEach {
    border-color: #01485A;
  }
  .appointmentCalendar .calendarDay.isActive .calendarDayEach,
  .appointmentCalendar .calendarDay:after,
  .appointmentFieldRow.forSelectedDate {
    background-color: #01485A;
    border-color: #01485A;
    color: #FFFFFF;
  }
  @keyframes indicate {
    0% {
      color: #01485A;
      background-color: transparent;
    }
    100% {
      color: #fff;
      background-color: #01485A;
    }
  }
  .appointmentSlot.active {
    animation: indicate 0.2s linear forwards;
  }
  .appointmentField .timezonePickerName:before {
    background-tel: url(data:tel/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iMTYiIHZpZXdCb3g9IjAgMCAxNiAxNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0wIDcuOTYwMkMwIDMuNTY2MTcgMy41NTgyMSAwIDcuOTUyMjQgMEMxMi4zNTQyIDAgMTUuOTIwNCAzLjU2NjE3IDE1LjkyMDQgNy45NjAyQzE1LjkyMDQgMTIuMzU0MiAxMi4zNTQyIDE1LjkyMDQgNy45NTIyNCAxNS45MjA0QzMuNTU4MjEgMTUuOTIwNCAwIDEyLjM1NDIgMCA3Ljk2MDJaTTEuNTkzNzUgNy45NjAyQzEuNTkzNzUgMTEuNDc4NiA0LjQ0MzUgMTQuMzI4NCA3Ljk2MTkxIDE0LjMyODRDMTEuNDgwMyAxNC4zMjg0IDE0LjMzMDEgMTEuNDc4NiAxNC4zMzAxIDcuOTYwMkMxNC4zMzAxIDQuNDQxNzkgMTEuNDgwMyAxLjU5MjA0IDcuOTYxOTEgMS41OTIwNEM0LjQ0MzUgMS41OTIwNCAxLjU5Mzc1IDQuNDQxNzkgMS41OTM3NSA3Ljk2MDJaIiBmaWxsPSIjMjA4MTlCIi8+CjxwYXRoIGQ9Ik04LjM1ODA5IDMuOTc5OThINy4xNjQwNlY4Ljc1NjFMMTEuMzQzMiAxMS4yNjM2TDExLjk0MDIgMTAuMjg0NUw4LjM1ODA5IDguMTU5MDhWMy45Nzk5OFoiIGZpbGw9IiMyMDgxOUIiLz4KPC9zdmc+Cg==);
  }
  .appointmentCalendarContainer .monthYearPicker .pickerArrow.prev:after {
    background-tel: url(data:tel/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAiIGhlaWdodD0iNiIgdmlld0JveD0iMCAwIDEwIDYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik04LjU5NzgyIDUuMzM2NjRDOC45MzMxMiA1LjY0MDE4IDkuNDM5MzkgNS42MzM2IDkuNzU2MTMgNS4zMTY2OUMxMC4wODEzIDQuOTkxMzYgMTAuMDgxMyA0LjQ2MzU0IDkuNzU2MTMgNC4xMzgyMUM5LjYwOTA0IDQuMDAwMjYgOS42MDkwMyA0LjAwMDI2IDkuMDg5NDkgMy41MTUwOUM4LjQzNzQyIDIuOTA2MDkgOC40Mzc0MyAyLjkwNjA5IDcuNjU1MTEgMi4xNzU0N0M2LjA4OTU2IDAuNzEzMzUzIDYuMDg5NTYgMC43MTMzNTIgNS41Njc3MyAwLjIyNjAwN0M1LjI0MTA0IC0wLjA3MDYwMDUgNC43NTA4NSAtMC4wNjk1OTY3IDQuNDMyMzUgMC4yMjU4MzVMMC4yNjI1NCA0LjExODE1Qy0wLjA4MDU0NTkgNC40NTkzNiAtMC4wODcxNzExIDQuOTg3ODggMC4yNDE0NjggNS4zMTY2OUMwLjU1OTU1OCA1LjYzNDk2IDEuMDY5NzUgNS42NDA1OSAxLjM5NzAzIDUuMzM2NTNMNC45OTg5MSAxLjk3NTIyTDguNTk3ODIgNS4zMzY2NFoiIGZpbGw9IiMwMDcwOEQiLz4KPC9zdmc+Cg==);
  }
  .appointmentCalendarContainer .monthYearPicker .pickerArrow.next:after {
    background-tel: url(data:tel/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAiIGhlaWdodD0iNiIgdmlld0JveD0iMCAwIDEwIDYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0xLjQwMjE4IDAuMjI2OTE1QzEuMDY2ODcgLTAuMDc2Njg0OSAwLjU2MDYwMiAtMC4wNzAwODQ5IDAuMjQzODY5IDAuMjQ2ODE1Qy0wLjA4MTI4OTggMC41NzIxMTUgLTAuMDgxMjg5OCAxLjEwMDAyIDAuMjQzODY5IDEuNDI1MzJDMC4zOTA5NTYgMS41NjMyMiAwLjM5MDk2NiAxLjU2MzIyIDAuOTEwNTEgMi4wNDg0MkMxLjU2MjU3IDIuNjU3NDIgMS41NjI1NiAyLjY1NzQxIDIuMzQ0ODggMy4zODgwMkMzLjkxMDQ0IDQuODUwMTEgMy45MTA0MyA0Ljg1MDEyIDQuNDMyMjcgNS4zMzc1MkM0Ljc1ODk1IDUuNjM0MTIgNS4yNDkxNSA1LjYzMzEyIDUuNTY3NjQgNS4zMzc3Mkw5LjczNzQ2IDEuNDQ1NDJDMTAuMDgwNSAxLjEwNDEyIDEwLjA4NzEgMC41NzU2MTUgOS43NTg1MyAwLjI0NjgxNUM5LjQ0MDQ0IC0wLjA3MTQ4NDkgOC45MzAyNCAtMC4wNzcwODQ5IDguNjAyOTcgMC4yMjcwMTVMNS4wMDEwOCAzLjU4ODMyTDEuNDAyMTggMC4yMjY5MTVaIiBmaWxsPSIjMDA3MDhEIi8+Cjwvc3ZnPgo=);
  }
  .appointmentField .timezonePickerName:after {
    background-tel: url(data:tel/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAiIGhlaWdodD0iNiIgdmlld0JveD0iMCAwIDEwIDYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0xIDFMNSA1TDkgMSIgc3Ryb2tlPSIjMDA3MDhEIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPgo8L3N2Zz4K);
    width: 11px;
  }
  .appointmentCalendar .calendarDay.isUnavailable ::placeholder,
  .appointmentCalendar .calendarDay.isUnavailable {
    color: #83D0E4;
  }
  .appointmentDayPickerButton {
    background-color: #83D0E4;
  }
  .form-collapse-table, .form-collapse-table:hover {
    background-color: #83D0E4;
    color: #00708D;
  }
  .form-sacl-button.jf-form-buttons,
  .form-submit-print.jf-form-buttons {
    color: #00708D;
    border-color: #00708D;
    background-color: #F0FCFF;
  }
  .form-pagebreak-next:hover  {
    background-color: #4F7D89;
    border-color: #4F7D89;
  }
  .form-pagebreak-back:hover  {
    background-color: #4F7D89;
    border-color: #4F7D89;
  }
  .form-pagebreak-next {
    background-color: #83D0E4;
    border-color: #83D0E4;
    color: #FFFFFF;
  }
  .form-pagebreak-back {
    background-color: #83D0E4;
    border-color: #83D0E4;
    color: #FFFFFF;
  }
  li[data-type=control_datetime] [data-wrapper-react=true].extended>div+.form-sub-label-container .form-textbox:placeholder-shown,
  li[data-type=control_datetime] [data-wrapper-react=true]:not(.extended) .form-textbox:not(.time-dropdown):placeholder-shown,
  .appointmentCalendarContainer .currentDate {
    background-tel: url(data:tel/svg+xml;base64,PHN2ZyB3aWR0aD0iMTciIGhlaWdodD0iMTYiIHZpZXdCb3g9IjAgMCAxNyAxNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE1Ljk0ODkgNVYxNS4wMjZDMTUuOTQ4OSAxNS41NjM5IDE1LjUwMjYgMTYgMTQuOTUyMSAxNkgwLjk5NjgwNUMwLjQ0NjI4NSAxNiAwIDE1LjU2MzkgMCAxNS4wMjZWNUgxNS45NDg5Wk00LjE5MjQ1IDExLjQxNjdIMi4zNzQ3NEwyLjI4NTE1IDExLjQyNDdDMi4xMTA3OCAxMS40NTY1IDEuOTY4MDEgMTEuNTc5MiAxLjkwNzUyIDExLjc0MjJMMS44ODQzNyAxMS44MjY4TDEuODc2MzQgMTEuOTE2N1YxMy42NjY3TDEuODg0MzcgMTMuNzU2NUMxLjkxNjAyIDEzLjkzMTUgMi4wMzg0IDE0LjA3NDcgMi4yMDA4MyAxNC4xMzU0TDIuMjg1MTUgMTQuMTU4NkwyLjM3NDc0IDE0LjE2NjdINC4xOTI0NUw0LjI4MjAzIDE0LjE1ODZDNC40NTY0MSAxNC4xMjY5IDQuNTk5MTggMTQuMDA0MSA0LjY1OTY3IDEzLjg0MTFMNC42ODI4MiAxMy43NTY1TDQuNjkwODUgMTMuNjY2N1YxMS45MTY3TDQuNjgyODIgMTEuODI2OEM0LjY1MTE3IDExLjY1MTkgNC41Mjg3OSAxMS41MDg2IDQuMzY2MzUgMTEuNDQ3OUw0LjI4MjAzIDExLjQyNDdMNC4xOTI0NSAxMS40MTY3Wk04Ljg4MzI5IDExLjQxNjdINy4wNjU1OUw2Ljk3NiAxMS40MjQ3QzYuODAxNjIgMTEuNDU2NSA2LjY1ODg1IDExLjU3OTIgNi41OTgzNyAxMS43NDIyTDYuNTc1MjIgMTEuODI2OEw2LjU2NzE5IDExLjkxNjdWMTMuNjY2N0w2LjU3NTIyIDEzLjc1NjVDNi42MDY4NyAxMy45MzE1IDYuNzI5MjUgMTQuMDc0NyA2Ljg5MTY4IDE0LjEzNTRMNi45NzYgMTQuMTU4Nkw3LjA2NTU5IDE0LjE2NjdIOC44ODMyOUw4Ljk3Mjg4IDE0LjE1ODZDOS4xNDcyNiAxNC4xMjY5IDkuMjkwMDMgMTQuMDA0MSA5LjM1MDUxIDEzLjg0MTFMOS4zNzM2NyAxMy43NTY1TDkuMzgxNyAxMy42NjY3VjExLjkxNjdMOS4zNzM2NyAxMS44MjY4QzkuMzQyMDIgMTEuNjUxOSA5LjIxOTY0IDExLjUwODYgOS4wNTcyIDExLjQ0NzlMOC45NzI4OCAxMS40MjQ3TDguODgzMjkgMTEuNDE2N1pNNC4xOTI0NSA2LjgzMzMzSDIuMzc0NzRMMi4yODUxNSA2Ljg0MTM5QzIuMTEwNzggNi44NzMxNCAxLjk2ODAxIDYuOTk1OTEgMS45MDc1MiA3LjE1ODg3TDEuODg0MzcgNy4yNDM0NkwxLjg3NjM0IDcuMzMzMzNWOS4wODMzM0wxLjg4NDM3IDkuMTczMjFDMS45MTYwMiA5LjM0ODE1IDIuMDM4NCA5LjQ5MTM3IDIuMjAwODMgOS41NTIwNUwyLjI4NTE1IDkuNTc1MjhMMi4zNzQ3NCA5LjU4MzMzSDQuMTkyNDVMNC4yODIwMyA5LjU3NTI4QzQuNDU2NDEgOS41NDM1MyA0LjU5OTE4IDkuNDIwNzUgNC42NTk2NyA5LjI1NzhMNC42ODI4MiA5LjE3MzIxTDQuNjkwODUgOS4wODMzM1Y3LjMzMzMzTDQuNjgyODIgNy4yNDM0NkM0LjY1MTE3IDcuMDY4NTIgNC41Mjg3OSA2LjkyNTI5IDQuMzY2MzUgNi44NjQ2MUw0LjI4MjAzIDYuODQxMzlMNC4xOTI0NSA2LjgzMzMzWk04Ljg4MzI5IDYuODMzMzNINy4wNjU1OUw2Ljk3NiA2Ljg0MTM5QzYuODAxNjIgNi44NzMxNCA2LjY1ODg1IDYuOTk1OTEgNi41OTgzNyA3LjE1ODg3TDYuNTc1MjIgNy4yNDM0Nkw2LjU2NzE5IDcuMzMzMzNWOS4wODMzM0w2LjU3NTIyIDkuMTczMjFDNi42MDY4NyA5LjM0ODE1IDYuNzI5MjUgOS40OTEzNyA2Ljg5MTY4IDkuNTUyMDVMNi45NzYgOS41NzUyOEw3LjA2NTU5IDkuNTgzMzNIOC44ODMyOUw4Ljk3Mjg4IDkuNTc1MjhDOS4xNDcyNiA5LjU0MzUzIDkuMjkwMDMgOS40MjA3NSA5LjM1MDUxIDkuMjU3OEw5LjM3MzY3IDkuMTczMjFMOS4zODE3IDkuMDgzMzNWNy4zMzMzM0w5LjM3MzY3IDcuMjQzNDZDOS4zNDIwMiA3LjA2ODUyIDkuMjE5NjQgNi45MjUyOSA5LjA1NzIgNi44NjQ2MUw4Ljk3Mjg4IDYuODQxMzlMOC44ODMyOSA2LjgzMzMzWk0xMy41NzQxIDYuODMzMzNIMTEuNzU2NEwxMS42NjY4IDYuODQxMzlDMTEuNDkyNSA2Ljg3MzE0IDExLjM0OTcgNi45OTU5MSAxMS4yODkyIDcuMTU4ODdMMTEuMjY2MSA3LjI0MzQ2TDExLjI1OCA3LjMzMzMzVjkuMDgzMzNMMTEuMjY2MSA5LjE3MzIxQzExLjI5NzcgOS4zNDgxNSAxMS40MjAxIDkuNDkxMzcgMTEuNTgyNSA5LjU1MjA1TDExLjY2NjggOS41NzUyOEwxMS43NTY0IDkuNTgzMzNIMTMuNTc0MUwxMy42NjM3IDkuNTc1MjhDMTMuODM4MSA5LjU0MzUzIDEzLjk4MDkgOS40MjA3NSAxNC4wNDE0IDkuMjU3OEwxNC4wNjQ1IDkuMTczMjFMMTQuMDcyNSA5LjA4MzMzVjcuMzMzMzNMMTQuMDY0NSA3LjI0MzQ2QzE0LjAzMjkgNy4wNjg1MiAxMy45MTA1IDYuOTI1MjkgMTMuNzQ4IDYuODY0NjFMMTMuNjYzNyA2Ljg0MTM5TDEzLjU3NDEgNi44MzMzM1oiIGZpbGw9IiM4M0QwRTQiLz4KPHBhdGggZD0iTTEzLjA1NDIgMS4xMjVIMTUuMDQ3OEMxNS41OTgzIDEuMTI1IDE2LjA0NDYgMS42MDA3IDE2LjA0NDYgMi4xODc1VjRIMC4wOTU3MDMxVjIuMTg3NUMwLjA5NTcwMzEgMS42MDA3IDAuNTQxOTg4IDEuMTI1IDEuMDkyNTEgMS4xMjVIMy4wODYxMlYxLjA2MjVDMy4wODYxMiAwLjQ3NTY5NyAzLjUzMjQgMCA0LjA4MjkyIDBDNC42MzM0NCAwIDUuMDc5NzMgMC40NzU2OTcgNS4wNzk3MyAxLjA2MjVWMS4xMjVIMTEuMDYwNlYxLjA2MjVDMTEuMDYwNiAwLjQ3NTY5NyAxMS41MDY4IDAgMTIuMDU3NCAwQzEyLjYwNzkgMCAxMy4wNTQyIDAuNDc1Njk3IDEzLjA1NDIgMS4wNjI1VjEuMTI1WiIgZmlsbD0iIzgzRDBFNCIvPgo8L3N2Zz4K);
  }
  .form-star-rating-star.Stars {
    background-tel: url(data:tel/png;base64,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) !important;
  }
  .signature-pad-passive, .signature-placeholder:after {
    background-tel: url(data:tel/svg+xml;base64,PHN2ZyB3aWR0aD0iMTk4IiBoZWlnaHQ9IjQwIiB2aWV3Qm94PSIwIDAgMTk4IDQwIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cGF0aCBkPSJNNzQuMTA0NCA2LjM0NTA4SDc1LjU4NTlDNzUuNTQxMiA0LjcxNDQgNzQuMDk5NCAzLjUzMTE2IDcyLjAzMTIgMy41MzExNkM2OS45ODc5IDMuNTMxMTYgNjguNDIxOSA0LjY5OTQ4IDY4LjQyMTkgNi40NTQ0NkM2OC40MjE5IDcuODcxMzYgNjkuNDM2MSA4LjcwMTYyIDcxLjA3MTcgOS4xNDQwOUw3Mi4yNzQ5IDkuNDcyMjFDNzMuMzYzNiA5Ljc2MDU2IDc0LjIwMzggMTAuMTE4NSA3NC4yMDM4IDExLjAyMzNDNzQuMjAzOCAxMi4wMTc3IDczLjI1NDMgMTIuNjczOSA3MS45NDY3IDEyLjY3MzlDNzAuNzYzNSAxMi42NzM5IDY5Ljc3OTEgMTIuMTQ2OSA2OS42ODk2IDExLjAzODNINjguMTQ4NEM2OC4yNDc5IDEyLjg4MjcgNjkuNjc0NyAxNC4wMjEyIDcxLjk1NjcgMTQuMDIxMkM3NC4zNDggMTQuMDIxMiA3NS43MjUxIDEyLjc2MzQgNzUuNzI1MSAxMS4wMzgzQzc1LjcyNTEgOS4yMDM3NSA3NC4wODk1IDguNDkyODEgNzIuNzk2OSA4LjE3NDYzTDcxLjgwMjYgNy45MTYxQzcxLjAwNzEgNy43MTIyNyA2OS45NDgyIDcuMzM5NCA2OS45NTMxIDYuMzY0OTdDNjkuOTUzMSA1LjQ5OTkxIDcwLjc0MzYgNC44NTg1OCA3MS45OTY0IDQuODU4NThDNzMuMTY0OCA0Ljg1ODU4IDczLjk5NSA1LjQwNTQ1IDc0LjEwNDQgNi4zNDUwOFoiIGZpbGw9IiM4M0QwRTQiLz4KPHBhdGggZD0iTTc3LjQ0MTYgMTMuODUyMkg3OC45MjgxVjYuMjE1ODJINzcuNDQxNlYxMy44NTIyWk03OC4xOTIzIDUuMDM3NTVDNzguNzA0NCA1LjAzNzU1IDc5LjEzMTkgNC42Mzk4MyA3OS4xMzE5IDQuMTUyNjFDNzkuMTMxOSAzLjY2NTM5IDc4LjcwNDQgMy4yNjI3IDc4LjE5MjMgMy4yNjI3Qzc3LjY3NTIgMy4yNjI3IDc3LjI1MjcgMy42NjUzOSA3Ny4yNTI3IDQuMTUyNjFDNzcuMjUyNyA0LjYzOTgzIDc3LjY3NTIgNS4wMzc1NSA3OC4xOTIzIDUuMDM3NTVaIiBmaWxsPSIjODNEMEU0Ii8+CjxwYXRoIGQ9Ik04NC4xMjk2IDE2Ljg2Qzg2LjA3MzUgMTYuODYgODcuNTc0OSAxNS45NzAxIDg3LjU3NDkgMTQuMDIxMlY2LjIxNTgySDg2LjExODNWNy40NTM3NUg4Ni4wMDg5Qzg1Ljc0NTQgNi45ODE0NSA4NS4yMTg0IDYuMTE2MzkgODMuNzk2NSA2LjExNjM5QzgxLjk1MjEgNi4xMTYzOSA4MC41OTQ4IDcuNTczMDYgODAuNTk0OCAxMC4wMDQyQzgwLjU5NDggMTIuNDQwMyA4MS45ODE5IDEzLjczNzggODMuNzg2NiAxMy43Mzc4Qzg1LjE4ODYgMTMuNzM3OCA4NS43MzA1IDEyLjk0NzQgODUuOTk4OSAxMi40NjAxSDg2LjA5MzRWMTMuOTYxNkM4Ni4wOTM0IDE1LjEzOTggODUuMjczMSAxNS42NjE4IDg0LjE0NDUgMTUuNjYxOEM4Mi45MDY2IDE1LjY2MTggODIuNDI0NCAxNS4wNDA0IDgyLjE2MDkgMTQuNjE3OEw4MC44ODMyIDE1LjE0NDhDODEuMjg1OSAxNi4wNjQ1IDgyLjMwNSAxNi44NiA4NC4xMjk2IDE2Ljg2Wk04NC4xMTQ3IDEyLjUwNDlDODIuNzg3MyAxMi41MDQ5IDgyLjA5NjIgMTEuNDg1NyA4Mi4wOTYyIDkuOTg0MjlDODIuMDk2MiA4LjUxNzY3IDgyLjc3MjQgNy4zNzkxNyA4NC4xMTQ3IDcuMzc5MTdDODUuNDEyMyA3LjM3OTE3IDg2LjEwODMgOC40MzgxMiA4Ni4xMDgzIDkuOTg0MjlDODYuMTA4MyAxMS41NjAzIDg1LjM5NzQgMTIuNTA0OSA4NC4xMTQ3IDEyLjUwNDlaIiBmaWxsPSIjODNEMEU0Ii8+CjxwYXRoIGQ9Ik05MS4wNTUgOS4zMTgwOUM5MS4wNTUgOC4xMDAwNSA5MS44MDA4IDcuNDA0MDMgOTIuODM0OSA3LjQwNDAzQzkzLjg0NDEgNy40MDQwMyA5NC40NTU2IDguMDY1MjUgOTQuNDU1NiA5LjE3MzkyVjEzLjg1MjJIOTUuOTQyMVY4Ljk5NDk0Qzk1Ljk0MjEgNy4xMDU3NCA5NC45MDMxIDYuMTE2MzkgOTMuMzQyIDYuMTE2MzlDOTIuMTkzNSA2LjExNjM5IDkxLjQ0MjggNi42NDgzNSA5MS4wODk4IDcuNDU4NzJIOTAuOTk1NFY2LjIxNTgySDg5LjU2ODVWMTMuODUyMkg5MS4wNTVWOS4zMTgwOVoiIGZpbGw9IiM4M0QwRTQiLz4KPHBhdGggZD0iTTEwMS43NiAxMy44NTIySDEwMy4yOTZWOS40MTI1NUgxMDguMzcyVjEzLjg1MjJIMTA5LjkxNFYzLjY3MDM3SDEwOC4zNzJWOC4wOTUwOEgxMDMuMjk2VjMuNjcwMzdIMTAxLjc2VjEzLjg1MjJaIiBmaWxsPSIjODNEMEU0Ii8+CjxwYXRoIGQ9Ik0xMTUuMzIzIDE0LjAwNjNDMTE2Ljk4OCAxNC4wMDYzIDExOC4xNjYgMTMuMTg2IDExOC41MDQgMTEuOTQzMUwxMTcuMDk3IDExLjY4OTVDMTE2LjgyOSAxMi40MTA0IDExNi4xODMgMTIuNzc4MyAxMTUuMzM4IDEyLjc3ODNDMTE0LjA2NSAxMi43NzgzIDExMy4yMSAxMS45NTMgMTEzLjE3IDEwLjQ4MTRIMTE4LjU5OVY5Ljk1NDQ2QzExOC41OTkgNy4xOTUyMiAxMTYuOTQ4IDYuMTE2MzkgMTE1LjIxOCA2LjExNjM5QzExMy4wOSA2LjExNjM5IDExMS42ODggNy43MzcxMyAxMTEuNjg4IDEwLjA4MzdDMTExLjY4OCAxMi40NTUyIDExMy4wNyAxNC4wMDYzIDExNS4zMjMgMTQuMDA2M1pNMTEzLjE3NSA5LjM2NzgxQzExMy4yMzUgOC4yODQgMTE0LjAyIDcuMzQ0MzcgMTE1LjIyOCA3LjM0NDM3QzExNi4zODIgNy4zNDQzNyAxMTcuMTM3IDguMTk5NDkgMTE3LjE0MiA5LjM2NzgxSDExMy4xNzVaIiBmaWxsPSIjODNEMEU0Ii8+CjxwYXRoIGQ9Ik0xMjAuMjQ4IDEzLjg1MjJIMTIxLjczNVY5LjE4ODgzQzEyMS43MzUgOC4xODk1NCAxMjIuNTA1IDcuNDY4NjYgMTIzLjU1OSA3LjQ2ODY2QzEyMy44NjggNy40Njg2NiAxMjQuMjE2IDcuNTIzMzUgMTI0LjMzNSA3LjU1ODE1VjYuMTM2MjdDMTI0LjE4NiA2LjExNjM5IDEyMy44OTIgNi4xMDE0NyAxMjMuNzAzIDYuMTAxNDdDMTIyLjgwOSA2LjEwMTQ3IDEyMi4wNDMgNi42MDg1OCAxMjEuNzY1IDcuNDI4ODlIMTIxLjY4NVY2LjIxNTgySDEyMC4yNDhWMTMuODUyMloiIGZpbGw9IiM4M0QwRTQiLz4KPHBhdGggZD0iTTEyOC42MzkgMTQuMDA2M0MxMzAuMzA1IDE0LjAwNjMgMTMxLjQ4MyAxMy4xODYgMTMxLjgyMSAxMS45NDMxTDEzMC40MTQgMTEuNjg5NUMxMzAuMTQ1IDEyLjQxMDQgMTI5LjQ5OSAxMi43NzgzIDEyOC42NTQgMTIuNzc4M0MxMjcuMzgxIDEyLjc3ODMgMTI2LjUyNiAxMS45NTMgMTI2LjQ4NiAxMC40ODE0SDEzMS45MTVWOS45NTQ0NkMxMzEuOTE1IDcuMTk1MjIgMTMwLjI2NSA2LjExNjM5IDEyOC41MzUgNi4xMTYzOUMxMjYuNDA3IDYuMTE2MzkgMTI1LjAwNSA3LjczNzEzIDEyNS4wMDUgMTAuMDgzN0MxMjUuMDA1IDEyLjQ1NTIgMTI2LjM4NyAxNC4wMDYzIDEyOC42MzkgMTQuMDA2M1pNMTI2LjQ5MSA5LjM2NzgxQzEyNi41NTEgOC4yODQgMTI3LjMzNiA3LjM0NDM3IDEyOC41NDUgNy4zNDQzN0MxMjkuNjk4IDcuMzQ0MzcgMTMwLjQ1NCA4LjE5OTQ5IDEzMC40NTkgOS4zNjc4MUgxMjYuNDkxWiIgZmlsbD0iIzgzRDBFNCIvPgo8cGF0aCBkPSJNMSAzNi4wMjI5QzEyLjI0NjEgMzkuMjIwNSAyMy4xODIgMzUuMDMyOCAzMi41MDg0IDI4Ljg1MTFDMzcuNDQwNCAyNS41ODIyIDQyLjMzNDEgMjEuNjY4NyA0NS4zMzI5IDE2LjUxMDFDNDYuNTI4MyAxNC40NTM5IDQ3Ljk4OTMgMTAuODg0NCA0NC4yMjcxIDEwLjg1MjhDNDAuMTMzNyAxMC44MTgzIDM3LjA4NjQgMTQuNTE0MiAzNS41NTg4IDE3Ljg3NDRDMzMuMzY4MSAyMi42OTMzIDMzLjI5MSAyOC40MDA0IDM1Ljk2NTYgMzMuMDQ0MUMzOC40OTcxIDM3LjQzOTYgNDIuNzQ0NSAzOS41MTg0IDQ3LjgxMTQgMzguNjYzOUM1My4xMDM3IDM3Ljc3MTMgNTcuNzMwNCAzNC4xNTYyIDYxLjU3NjUgMzAuNjc4NUM2Mi45OTMgMjkuMzk3NiA2NC4zMjA5IDI4LjA0NzUgNjUuNTQyIDI2LjU4NTdDNjUuNjg0MiAyNi40MTU1IDY2LjE4NDIgMjUuNTc5OCA2Ni41MDggMjUuNTIxOEM2Ni42Mjg0IDI1LjUwMDIgNjYuODA2NCAyOS4xNjQ1IDY2LjgzODUgMjkuMzY0M0M2Ny4xMjU1IDMxLjE1NDMgNjguMDI5NCAzMy4xNzA2IDcwLjE0MzEgMzMuMjMxOEM3Mi44MzMyIDMzLjMwOTcgNzUuMDgyNiAzMS4wNTkxIDc2Ljg5MjIgMjkuNDAxOEM3Ny41MDI2IDI4Ljg0MjggNzkuNDQyNSAyNi4xNjAxIDgwLjQ3NjQgMjYuMTYwMUM4MC45MDE0IDI2LjE2MDEgODEuNzI0OSAyOC4zMDM4IDgxLjkxMjcgMjguNTg4M0M4NC4zOTcyIDMyLjM1MjMgODguMDQ0NiAzMC45ODk0IDkwLjg3MzMgMjguMzUwNUM5MS4zOTM0IDI3Ljg2NTMgOTQuMTc4MSAyMy45ODM5IDk1LjMwOTEgMjQuNjgzMkM5Ni4yMjAzIDI1LjI0NjYgOTYuNjIxNyAyNi41NzY1IDk3LjA4ODYgMjcuNDYxOEM5Ny44NDg0IDI4LjkwMjkgOTguODEwNyAyOS45Mjk0IDEwMC40MTkgMzAuNDY1N0MxMDMuOTEyIDMxLjYzMSAxMDcuNjggMjguMzYzIDExMS4yMjIgMjguMzYzQzExMi4yNTUgMjguMzYzIDExMi43ODMgMjguOTMxNiAxMTMuMzMyIDI5LjcxNDhDMTE0LjA4MSAzMC43ODIzIDExNC44NTMgMzEuNTI3NiAxMTYuMjA1IDMxLjgxNzVDMTIwLjM5MyAzMi43MTU1IDEyMy44MjIgMjguNzM5OSAxMjcuODcyIDI5LjA4ODlDMTI5LjA1MyAyOS4xOTA3IDEyOS45MzUgMzAuMzgxNiAxMzAuODIxIDMxLjAxNjRDMTMyLjYwOSAzMi4yOTY5IDEzNC43NTkgMzMuMTgzNiAxMzYuOTQ4IDMzLjQ5NDdDMTQwLjQ1NyAzMy45OTM0IDE0My45NzUgMzMuMzMyNiAxNDcuMzk1IDMyLjU5MzVDMTUzLjMgMzEuMzE3NCAxNTkuMTQ3IDI5Ljc5NTggMTY1LjA2MiAyOC41NjMzIiBzdHJva2U9IiM4M0QwRTQiIHN0cm9rZS13aWR0aD0iMS41IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPHBhdGggZD0iTTE5Ni41MTUgMTUuMDc3OEwxODQuNDkyIDAuNTUxNzk1QzE4NC4yNTcgMC4yNjc4MSAxODMuODM4IDAuMjI4MjYgMTgzLjU1NCAwLjQ2MzMwN0wxODAuNjQ5IDIuODY3ODhDMTgwLjM2NSAzLjEwMjkzIDE4MC4zMjUgMy41MjI0IDE4MC41NiAzLjgwNjM4TDE5Mi41ODMgMTguMzMyNEMxOTIuNyAxOC40NzQxIDE5Mi44NjQgMTguNTU1MSAxOTMuMDM0IDE4LjU3MTJDMTkzLjIwNCAxOC41ODcyIDE5My4zOCAxOC41MzgyIDE5My41MjIgMTguNDIwOUwxOTYuNDI3IDE2LjAxNjRDMTk2LjcxMSAxNS43ODEzIDE5Ni43NSAxNS4zNjE4IDE5Ni41MTUgMTUuMDc3OFoiIGZpbGw9IiM4M0QwRTQiLz4KPHBhdGggZD0iTTE4MS40MzYgNi45NTcyTDE3MC44NTUgOS44MjU5M0MxNzAuNjIyIDkuODg5MDEgMTcwLjQ0MSAxMC4wNzI5IDE3MC4zODMgMTAuMzA3MUwxNjYuMTU1IDI3LjEwMTdMMTczLjk3NSAyMC42MjkxQzE3My4yNDUgMTkuMjYxMiAxNzMuNTUgMTcuNTE4OSAxNzQuNzkgMTYuNDkyMUMxNzYuMjA2IDE1LjMxOTggMTc4LjMxMiAxNS41MTkxIDE3OS40ODMgMTYuOTM0NkMxODAuNjU1IDE4LjM1MDggMTgwLjQ1NiAyMC40NTYxIDE3OS4wNDEgMjEuNjI3OEMxNzguMzMzIDIyLjIxMzkgMTc3LjQ1MiAyMi40NTc3IDE3Ni42MDMgMjIuMzc3NkMxNzUuOTY0IDIyLjMxNzQgMTc1LjM0MyAyMi4wNzQgMTc0LjgyNSAyMS42NTY4TDE2Ny4wMDUgMjguMTI4NkwxODQuMjk0IDI3LjExMzdDMTg0LjUzNCAyNy4wOTk2IDE4NC43NDkgMjYuOTU3MSAxODQuODU0IDI2Ljc0MDFMMTg5LjY1IDE2Ljg4MTRMMTgxLjQzNiA2Ljk1NzJaIiBmaWxsPSIjODNEMEU0Ii8+Cjwvc3ZnPgo=);
  }
  .form-pagebreak,
  .form-pagebreak > div, .form-buttons-wrapper,
  .form-pagebreak,
  .form-submit-clear-wrapper, .form-header-group {
    border-color: #83D0E4;
  }
  .submit-button {
    background-color: #00708D;
    border-color: #00708D;
  }
  .submit-button:hover {
    background-color: #004355;
    border-color: #004355;
  }
  .form-matrix-headers.form-matrix-column-headers,
  .form-matrix-row-headers {
    background-color: #83D0E4;
    color: #FFFFFF;
  }
  .appointmentCalendar .dayOfWeek {
    color: #FFFFFF;
    background-color: #83D0E4;
  }
  .form-spinner-button-container > * {
    background-color: #83D0E4;
    color: #FFFFFF;
  }
  .clear-pad-btn {
    background-color: #00708D;
    color: #FFFFFF;
  }
  .form-line-active {
    background-color: #F1F5FF;
  }
  .form-line-error {
    background-color: #FFEDED;
  }
  .form-spinner-button.form-spinner-up:before {
    background-tel: url(data:tel/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAxNCAxNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjUgMTIuNDAwNEw3LjUgNy40MDAzOUwxMi41IDcuNDAwMzlDMTIuNzc2IDcuNDAwMzkgMTMgNy4xNzYzOSAxMyA2LjkwMDM5QzEzIDYuNjI0MzkgMTIuNzc2IDYuNDAwMzkgMTIuNSA2LjQwMDM5TDcuNSA2LjQwMDM5TDcuNSAxLjQwMDM5QzcuNSAxLjEyNDM5IDcuMjc2IDAuOTAwMzkgNyAwLjkwMDM5QzYuNzI0IDAuOTAwMzkgNi41IDEuMTI0MzkgNi41IDEuNDAwMzlMNi41IDYuNDAwMzlMMS41IDYuNDAwMzlDMS4yMjQgNi40MDAzOSAxIDYuNjI0MzkgMSA2LjkwMDM5QzEgNy4xNzYzOSAxLjIyNCA3LjQwMDM5IDEuNSA3LjQwMDM5TDYuNSA3LjQwMDM5TDYuNSAxMi40MDA0QzYuNSAxMi42NzY0IDYuNzI0IDEyLjkwMDQgNyAxMi45MDA0QzcuMjc2IDEyLjkwMDQgNy41IDEyLjY3NjQgNy41IDEyLjQwMDRaIiBmaWxsPSIjMDA3MDhEIiBzdHJva2U9IiMwMDcwOEQiIHN0cm9rZS13aWR0aD0iMC41Ii8+Cjwvc3ZnPgo=);
  }
  .form-spinner-button.form-spinner-down:before {
    background-tel: url(data:tel/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMiIgdmlld0JveD0iMCAwIDE0IDIiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0xMi41IDEuNDAwMzlMNy41IDEuNDAwMzlMMS41IDEuNDAwMzlDMS4yMjQgMS40MDAzOSAxIDEuMTc2MzkgMSAwLjkwMDM5QzEgMC42MjQzOSAxLjIyNCAwLjQwMDM5IDEuNSAwLjQwMDM5TDYuNSAwLjQwMDM5TDEyLjUgMC40MDAzOTFDMTIuNzc2IDAuNDAwMzkxIDEzIDAuNjI0MzkxIDEzIDAuOTAwMzkxQzEzIDEuMTc2MzkgMTIuNzc2IDEuNDAwMzkgMTIuNSAxLjQwMDM5WiIgZmlsbD0iIzAwNzA4RCIgc3Ryb2tlPSIjMDA3MDhEIiBzdHJva2Utd2lkdGg9IjAuNSIvPgo8L3N2Zz4K);
  }
  .form-collapse-table:after{
    background-tel: url(data:tel/svg+xml;base64,PHN2ZyB3aWR0aD0iMjgiIGhlaWdodD0iMjgiIHZpZXdCb3g9IjAgMCAyOCAyOCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0yOCAxNEMyOCA2LjI2ODAxIDIxLjczMiAtOS40OTkzNWUtMDcgMTQgLTYuMTE5NTllLTA3QzYuMjY4MDEgLTIuNzM5ODRlLTA3IC05LjQ5OTM1ZS0wNyA2LjI2ODAxIC02LjExOTU5ZS0wNyAxNEMtMi43Mzk4NGUtMDcgMjEuNzMyIDYuMjY4MDEgMjggMTQgMjhDMjEuNzMyIDI4IDI4IDIxLjczMiAyOCAxNFpNOC4wMDI0IDExLjcwMDNDNy45OTI0NCAxMS41ODEzIDguMDEzNjMgMTEuNDYxNyA4LjA2MzU5IDExLjM1NDlDOC4xMTM0NyAxMS4yNDgyIDguMTkwMDUgMTEuMTU4NSA4LjI4NDc5IDExLjA5NTlDOC4zNzk1MiAxMS4wMzMyIDguNDg4NjUgMTEgOC41OTk5OSAxMUwxOS40IDExQzE5LjUxMTMgMTEgMTkuNjIwNSAxMS4wMzMyIDE5LjcxNTIgMTEuMDk1OUMxOS44MDk5IDExLjE1ODUgMTkuODg2NSAxMS4yNDgyIDE5LjkzNjQgMTEuMzU0OUMxOS45Nzc5IDExLjQ0NDQgMTkuOTk5NiAxMS41NDI5IDIwIDExLjY0MjlDMjAgMTEuNzgyIDE5Ljk1NzkgMTEuOTE3MyAxOS44OCAxMi4wMjg2TDE0LjQ4IDE5Ljc0MjlDMTQuNDI0MSAxOS44MjI3IDE0LjM1MTYgMTkuODg3NSAxNC4yNjgzIDE5LjkzMjFDMTQuMTg1IDE5Ljk3NjggMTQuMDkzMSAyMCAxNCAyMEMxMy45MDY4IDIwIDEzLjgxNSAxOS45NzY4IDEzLjczMTcgMTkuOTMyMUMxMy42NDg0IDE5Ljg4NzUgMTMuNTc1OSAxOS44MjI3IDEzLjUyIDE5Ljc0MjlMOC4xMTk5OSAxMi4wMjg2QzguMDUzMDggMTEuOTMzIDguMDEyMzYgMTEuODE5MyA4LjAwMjQgMTEuNzAwM1oiIGZpbGw9IiMwMDcwOEQiLz4KPC9zdmc+Cg==);
  }
  li[data-type=control_fileupload] .qq-upload-button:before {
    background-tel: url(data:tel/svg+xml;base64,PHN2ZyB3aWR0aD0iMzkiIGhlaWdodD0iMjgiIHZpZXdCb3g9IjAgMCAzOSAyOCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTMyLjM3NSAxMi4xODc1QzMxLjUgNS42ODc1IDI2IDAuODc1IDE5LjM3NSAwLjg3NUMxMy42ODc1IDAuODc1IDguNzUgNC40Mzc1IDYuOTM3NSA5LjgxMjVDMi44NzUgMTAuNjg3NSAwIDE0LjE4NzUgMCAxOC4zNzVDMCAyMi45Mzc1IDMuNTYyNSAyNi43NSA4LjEyNSAyNy4xMjVIMzEuODc1SDMxLjkzNzVDMzUuNzUgMjYuNzUgMzguNzUgMjMuNSAzOC43NSAxOS42MjVDMzguNzUgMTUuOTM3NSAzNiAxMi43NSAzMi4zNzUgMTIuMTg3NVpNMjYuMDYyNSAxNS42ODc1QzI1LjkzNzUgMTUuODEyNSAyNS44MTI1IDE1Ljg3NSAyNS42MjUgMTUuODc1QzI1LjQzNzUgMTUuODc1IDI1LjMxMjUgMTUuODEyNSAyNS4xODc1IDE1LjY4NzVMMjAgMTAuNVYyMi43NUMyMCAyMy4xMjUgMTkuNzUgMjMuMzc1IDE5LjM3NSAyMy4zNzVDMTkgMjMuMzc1IDE4Ljc1IDIzLjEyNSAxOC43NSAyMi43NVYxMC41TDEzLjU2MjUgMTUuNjg3NUMxMy4zMTI1IDE1LjkzNzUgMTIuOTM3NSAxNS45Mzc1IDEyLjY4NzUgMTUuNjg3NUMxMi40Mzc1IDE1LjQzNzUgMTIuNDM3NSAxNS4wNjI1IDEyLjY4NzUgMTQuODEyNUwxOC45Mzc1IDguNTYyNUMxOSA4LjUgMTkuMDYyNSA4LjQzNzUgMTkuMTI1IDguNDM3NUMxOS4yNSA4LjM3NSAxOS40Mzc1IDguMzc1IDE5LjYyNSA4LjQzNzVDMTkuNjg3NSA4LjUgMTkuNzUgOC41IDE5LjgxMjUgOC41NjI1TDI2LjA2MjUgMTQuODEyNUMyNi4zMTI1IDE1LjA2MjUgMjYuMzEyNSAxNS40Mzc1IDI2LjA2MjUgMTUuNjg3NVoiIGZpbGw9IiM4M0QwRTQiLz4KPC9zdmc+Cg==);
  }
  .appointmentDayPickerButton {
    background-tel: url(data:tel/svg+xml;base64,PHN2ZyB3aWR0aD0iNiIgaGVpZ2h0PSIxMCIgdmlld0JveD0iMCAwIDYgMTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0xIDlMNSA1TDEgMSIgc3Ryb2tlPSIjMDA3MDhEIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPgo8L3N2Zz4K);
  }
  div.stageEmpty.isSmall {
    border-color: #83D0E4;
    color: #00708D;
  }
  select.form-dropdown.is-active,
  select.form-dropdown.is-active:not(.time-dropdown):not(:required) {
    color: #2c3345;
  }
  .form-line[data-payment=true] .form-dropdown,
  .form-line[data-payment=true] .form-dropdown.is-active,
  .form-line[data-payment=true] .select-area .selected-values {
    color: #2c3345;
  }
  .form-line[data-payment=true] .form-special-subtotal {
    color: #00708D;
  }
  .form-line[data-payment=true].card-2col .form-product-details,
  .form-line[data-payment=true].card-3col .form-product-details {
    color: #00708D;
  }
  .form-line[data-payment=true] button#coupon-button {
    border-color: #00708D;
    background-color: #00708D;
  }
  .form-product-category-item .selected-items-icon {
    background-color: rgba(0,112,141,.7);
    border-color: rgba(0,112,141,.7);
  }
  .filter-container #productSearch-input::placeholder,
  .form-line[data-payment=true] #coupon-input::placeholder,
  .selected-values::placeholder,
  .dropdown-hint {
    color: #83D0E4;
  }
  .form-line[data-payment=true] .form-textbox,
  .form-line[data-payment=true] .select-area,
  .form-line[data-payment=true] #coupon-input,
  .form-line[data-payment=true] #coupon-container input,
  .form-line[data-payment=true] input#productSearch-input,
  .form-line[data-payment=true] .form-product-category-item:after,
  .form-line[data-payment=true] .filter-container .dropdown-container .select-content,
  .form-line[data-payment=true] .form-textbox.form-product-custom_quantity,
  .form-line[data-payment="true"] .form-product-item .p_checkbox .select_border,
  .form-line[data-payment="true"] .form-product-item .form-product-container .form-sub-label-container span.select_cont,
  .form-line[data-payment=true] select.form-dropdown {
    border-color: #00708D;
    border-color: rgba(0,112,141,.4);
  }
  .form-line[data-payment="true"] hr,
  .form-line[data-payment=true] .p_item_separator,
  .form-line[data-payment="true"] .payment_footer.new_ui,
  .form-line.card-3col .form-product-item.new_ui,
  .form-line.card-2col .form-product-item.new_ui {
    border-color: #00708D;
    border-color: rgba(0,112,141,.2);
  }
  .form-line[data-payment=true] .form-product-category-item {
    border-color: #00708D;
    border-color: rgba(0,112,141,.3);
  }
  .form-line[data-payment=true] #coupon-input,
  .form-line[data-payment=true] .form-textbox.form-product-custom_quantity,
  .form-line[data-payment=true] input#productSearch-input,
  .form-line[data-payment=true] .select-area,
  .form-line[data-payment=true] .custom_quantity,
  .form-line[data-payment=true] .filter-container .select-content,
  .form-line[data-payment=true] .p_checkbox .select_border {
    background-color: #FFFFFF;
  }
  .form-product-category-item:after {
   background-color: rgba(0,112,141,.7);
   border-color: rgba(0,112,141,.7);
  }
  .form-line[data-payment=true].form-line.card-3col .form-product-item,
  .form-line[data-payment=true].form-line.card-2col .form-product-item {
   background-color: rgba(0,0,0,.05);
  }
  .form-line[data-payment="true"] .form-product-category-item:after {
    background-tel: url(data:tel/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDI0LjMuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHZpZXdCb3g9IjAgMCAxMCA2IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAxMCA2OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+Cgkuc3Qwe2ZpbGw6bm9uZTtzdHJva2U6I0ZGRkZGRjtzdHJva2Utd2lkdGg6MjtzdHJva2UtbGluZWNhcDpyb3VuZDtzdHJva2UtbGluZWpvaW46cm91bmQ7fQo8L3N0eWxlPgo8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMSwxbDQsNGw0LTQiLz4KPC9zdmc+Cg==);
  }
  .form-line[data-payment=true] .payment-form-table input.form-textbox,
  .form-line[data-payment=true] .payment-form-table input.form-dropdown,
  .form-line[data-payment=true] .payment-form-table .form-sub-label-container > div,
  .form-line[data-payment=true] .payment-form-table span.form-sub-label-container iframe,
  .form-line[data-type=control_square] .payment-form-table span.form-sub-label-container iframe {
    border-color: #00708D;
  }

  /* NEW THEME STYLE */
  /*PREFERENCES STYLE*/
  /*PREFERENCES STYLE*/
    .form-all {
      font-family: Inter, sans-serif;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: Inter, sans-serif;
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: Inter, sans-serif;
    }
    .form-header-group {
      font-family: Inter, sans-serif;
    }
    .form-label {
      font-family: Inter, sans-serif;
    }
  
    .form-label.form-label-auto {
      
    display: block;
    float: none;
    text-align: left;
    width: 100%;
  
    }
  
    .form-line {
      margin-top: 12px 36px 12px 36px px;
      margin-bottom: 12px 36px 12px 36px px;
    }
  
    .form-all {
      max-width: 752px;
      width: 100%;
    }
  
    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
      width: 230px;
    }
  
    .form-all {
      font-size: 16px
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 16px
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 16px
    }
  
    .supernova {
      background-color: #DEAD6F;
    }
    .supernova body {
      background: transparent;
    }
  
    .supernova .form-all, .form-all {
      background-color: #FFF9EB;
    }
  
    .form-all {
      color: #00708D;
    }
    .form-header-group .form-header {
      color: #00708D;
    }
    .form-header-group .form-subHeader {
      color: #00708D;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: #00708D;
    }
    .form-sub-label {
      color: #1a8aa7;
    }
  
    .form-textbox,
    .form-textarea,
    .form-dropdown,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: #FFFFFF;
    }
  
    .form-line-error {
      overflow: hidden;
      transition: none;
      background-color: #FFEDED;
    }

    .form-line-error .form-error-message {
      background-color: #FF3200;
      clear: both;
      float: none;
    }

    .form-line-error .form-error-arrow {
      border-bottom-color: #FF3200;
    }

    .form-line-error input:not(#coupon-input),
    .form-line-error textarea,
    .form-line-error .form-validation-error {
      border: 1px solid #FF3200;
      .box-shadow (0 0 3px #FF3200);
    }
   
    .supernova {
      background-tel: none;
    }
    #stage {
      background-tel: none;
    }
  
    .form-all {
      background-tel: none;
    }
  
  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }
  
  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
    /* Injected CSS Code */
</style>


</head>
<body>
<form method="POST" action="#">
<div role="main" class="form-all">
    <ul class="form-section page-section">
        <li id="cid_1" class="form-input-wide" data-type="control_head">
            <div class="form-header-group header-large">
                <div class="header-text httal htvam">
                    <h1 id="header_1" class="form-header" data-component="header">Bon de Commande </h1>
                </div>
            </div>
        </li>
        <li class="form-line" data-type="control_text" id="id_17">
            <label class="form-label form-label-top form-label-auto" id="label_17" for="input_17" aria-hidden="false">Nom</label>
            <div id="cid_17" class="form-input-wide" data-layout="half">
                <span class="form-sub-label-container" style="vertical-align:top">
                    <input type="text" id="input_17" name="nom" class="form-textbox" autocomplete="section-input_17" style="width:310px" size="310" data-component="text" aria-labelledby="label_17 sublabel_input_17" value="">
                </span>
            </div>
        </li>
        <li class="form-line" data-type="control_email" id="id_16">
            <label class="form-label form-label-top form-label-extended form-label-auto" id="label_16" for="input_16" aria-hidden="false">Email</label>
            <div id="cid_16" class="form-input-wide" data-layout="full">
                <div data-wrapper-react="true" class="extended">
                    <span class="form-sub-label-container" style="vertical-align:top">
                        <input type="email" id="input_16" name="email" class="form-textbox" autocomplete="section-input_16" size="4" data-component="email" aria-labelledby="label_16 sublabel_16" value="">
                    </span>
                </div>
            </div>
        </li>
        <li class="form-line" data-type="control_phone" id="id_18">
            <label class="form-label form-label-top form-label-auto" id="label_18" for="input_18_full">Numéro de téléphone</label>
            <div id="cid_18" class="form-input-wide" data-layout="half">
                <span class="form-sub-label-container" style="vertical-align:top">
                    <input type="tel" id="input_18_full" name="tel" class="form-textbox" autocomplete="section-input_18 tel-national" style="width:310px" placeholder="(000) 000-0000" data-component="phone" aria-labelledby="label_18 sublabel_18" value="">
                </span>
            </div>
        </li>
        <li class="form-line" data-type="control_address" id="id_19">
            <label class="form-label form-label-top form-label-auto" id="label_19" for="input_19_addr_line1" aria-hidden="false">Adresse</label>
            <div id="cid_19" class="form-input-wide" data-layout="full">
                <div summary="" class="form-address-table jsTest-addressField">
                    <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                        <span class="form-address-line form-address-street-line jsTest-address-lineField">
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="text" id="input_19_addr_line1" name="adress" class="form-textbox form-address-line" autocomplete="section-input_19 address-line1" data-component="address_line_1" aria-labelledby="label_19 sublabel_19_addr_line1" required="" value="" maxlength="100">
                                <label class="form-sub-label" for="input_19_addr_line1" id="sublabel_19_addr_line1" style="min-height:13px">Numéro et rue</label>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </li>
        <li id="cid_27" class="form-input-wide" data-type="control_pagebreak">
            <div class="form-pagebreak" data-component="pagebreak">
                <div class="form-pagebreak-back-container"></div>
                <div class="form-pagebreak-next-container">
                    <button id="form-pagebreak-next_27" type="submit" class="form-pagebreak-next jf-form-buttons" data-component="pagebreak-next">Suivant</button>
                </div>
                <div style="clear:both" class="pageInfo form-sub-label" id="pageInfo_27"></div>
            </div>
        </li>
    </ul>
</div>
</form>
  
  <script>
    JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
    JotForm.poweredByText = "Powered by Jotform";
  </script><input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="241296813417560-241296813417560">
  <script type="text/javascript">
    var all_spc = document.querySelectorAll("form[id='241296813417560'] .si" + "mple" + "_spc");
    for (var i = 0; i < all_spc.length; i++)
    {
      all_spc[i].value = "241296813417560-241296813417560";
    }
  </script>
<script type="text/javascript">JotForm.ownerView=true;</script><script type="text/javascript">JotForm.isNewSACL=true;</script><script src="/js/locale/partial-translations/form-footer/locale_fr-FR.js?1413"></script></body></html>