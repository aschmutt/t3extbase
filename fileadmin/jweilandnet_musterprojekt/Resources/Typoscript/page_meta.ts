page.meta{
    keywords.field = keywords
    ## defined in Root template 
    keywords.ifEmpty = {$defaultKeywords}
    
    description.field = description
    ## defined in Root template
    description.ifEmpty= {$defaultDescription}
    
    robots = INDEX,FOLLOW
    
    viewport = width=device-width,initial-scale=1,maximum-scale=1.0,user-scalable=no
 }
