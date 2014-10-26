jQuery(document).ready(function(){
    var locationUrl = document.location.href;
    var BASE_URL_INDEX = BASE_URL + 'index.php';
    var BASE_URL_INDEX2 = BASE_URL_INDEX + '/';
    
    if(locationUrl == BASE_URL || locationUrl == BASE_URL_INDEX || locationUrl == BASE_URL_INDEX2 ){
        jQuery('.homelink').addClass('active');
    }
    
    if(locationUrl == clearenceUrl ){
        jQuery('.clearence').addClass('active');
    }
    
});