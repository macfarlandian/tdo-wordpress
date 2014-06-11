<!DOCTYPE html>
<html>
    <head>
        <title>exam question batch upload</title>
        <meta charset="utf-8">
    </head>
    <body>
    <?php

    $parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
    require_once( $parse_uri[0] . 'wp-load.php' );

    $qs = json_decode(file_get_contents("questions.json"), true);

    foreach ($qs as $q) {
        $post = array(
            "post_status" => "publish",
            "post_type" => "tdo_resource",
            "post_author" => 5, // bob on the TDO site
            "tax_input" => array(
                "resource_types" => array(get_term_by("slug", "exam-question", "resource_types")->term_id,),
            ),
        );

        foreach ($q as $k=>$v) {
            switch ($k):
                case "title":
                    $post["post_title"] = $v;
                    break;
                case "question":
                    $post["post_content"] = $v;
                    break;
                case "tags":
                    $post["tags_input"] = $v;
                    break;
                case "section":
                    $v = str_replace(".", "-", $v);
                    $v = explode(',', $v);
                    $chapters = array();
                    foreach ($v as $ch):
                        $chapters[] = get_term_by('slug', $ch, 'chapters')->term_id;
                    endforeach;
                    $post["tax_input"]["chapters"] = $chapters;
                    break;
                default:
                    break;
            endswitch;
        }
        // echo "<pre>";
        // print_r($post);
        // echo "</pre>";
        $id = wp_insert_post($post);
        echo "<p>Added post \"" . $post["post_title"] . "\" with ID = $id</p>";
    }
    ?>
    </body>
</html>
