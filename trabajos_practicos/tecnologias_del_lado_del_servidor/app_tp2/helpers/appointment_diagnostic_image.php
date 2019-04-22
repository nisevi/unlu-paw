<?php

function ValidImageExtention($extention) {
  $valid_extentions = ["png", "jpg"];
  if (in_array($extention, $valid_extentions)) {
    return TRUE;
  }
  return FALSE;
}

function ValidImageBasename($basename) {
  if (isset($basename) && $basename != "") {
    return TRUE;
  }
  return FALSE;
}

function ValidImageSize($size) {
  if ($size <= 5000000) {
    return TRUE;
  }
  return FALSE;
}

function ValidImage($extention, $basename, $size) {
  return ValidImageExtention($extention) &&
         ValidImageBasename($basename) &&
         ValidImageSize($size);
}
