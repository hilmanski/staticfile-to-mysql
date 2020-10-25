//Setup your own mysql connection

$files = scandir(public_path('/blog'));

    foreach ($files as $key => $value) {
        $path = realpath(public_path('/blog'). DIRECTORY_SEPARATOR . $value);
        if (!is_dir($path)) {
            $fileText = file_get_contents($path);
            $content = explode("+++", trim($fileText));
            
            $body = $content[2];
            
            //Separate meta tags...
            $metas = explode("\n", $content[1]);
            $prepareMeta = [];
            foreach($metas as $meta) {
                if(trim($meta) != "") {
                    $metaEach = explode("=", $meta);
                    $key = trim($metaEach[0]);

                    if(isset($metaEach[1])) {
                        $prepareMeta[$key] = str_replace('"', '', trim($metaEach[1]));
                    }
                }
            }
            
            //it really depends on your meta field, it will be available at
            //$prepareMeta['title'] , $prepareMeta['slug'], .... etc. (meta stuff)
            //$body (text content)

            //DO INSERT QUERY HERE
        } 
    }
