var DEVICE = DEVICE || {};
DEVICE = {
  isSp: false,
  isIos: false,
  isAndroid: false,
  isTablet: false,
  isPc: false,
  isIe11: false,
  isEdge: false,
  isSafariPc: false,
  isFirefox: false,
  isChrome: false
};

var ua = navigator.userAgent.toLowerCase();
var ver = navigator.appVersion.toLowerCase();
if (ua.indexOf('ipod') != -1 ||
  ua.indexOf('iphone') != -1) {
  DEVICE.isSp = true;
  DEVICE.isIos = true;
  document.getElementsByTagName('body')[0].classList.add('isSp');
  document.getElementsByTagName('body')[0].classList.add('isIos');
} else if (ua.indexOf('android') != -1 && ua.indexOf('mobile') != -1) {
  DEVICE.isSp = true;
  DEVICE.isAndroid = true;
  document.getElementsByTagName('body')[0].classList.add('isSp');
  document.getElementsByTagName('body')[0].classList.add('isAndorid');
} else if(ua.indexOf('ipad') > 0){
  document.getElementsByTagName('body')[0].classList.add('isTablet');
  document.getElementsByTagName('body')[0].classList.add('isIos');
  DEVICE.isIos = true;
  DEVICE.isTablet = true;
} else if(ua.indexOf('android') > 0) {
  document.getElementsByTagName('body')[0].classList.add('isTablet');
  document.getElementsByTagName('body')[0].classList.add('isAndorid');
  DEVICE.isTablet = true;
} else {
  DEVICE.isPc = true;
  document.getElementsByTagName('body')[0].classList.add('isPc');
  if (ua.indexOf('edge') !== -1) {
    DEVICE.isEdge = true;
    document.getElementsByTagName('body')[0].classList.add('isEdge');
  }
  else if (ua.indexOf('trident/7') !== -1) {
    DEVICE.isIe11 = true;
    document.getElementsByTagName('body')[0].classList.add('isIe11');
  }
  else if (ua.indexOf('safari') !== -1 && ua.indexOf('chrome') === -1) {
    DEVICE.isSafariPc = true;
    document.getElementsByTagName('body')[0].classList.add('isSafariPc');
  }
  else if (ua.indexOf('firefox') !== -1) {
    DEVICE.isFirefox = true;
    document.getElementsByTagName('body')[0].classList.add('isFirefox');
  }
  else if (ua.indexOf('chrome') !== -1) {
    DEVICE.isChrome = true;
    document.getElementsByTagName('body')[0].classList.add('isChrome');
  }
}
