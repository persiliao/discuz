<?php

declare(strict_types=1);

namespace PersiLiao\Discuz\AdminCp;

use function json_encode;
use function PersiLiao\Discuz\getCpLang;
use function PersiLiao\Eventy\addAction;
use function showtablerow;
use function sprintf;

class Form{

    /**
     * @param string $type
     * @param string $field
     * @param        $value
     * @param array  $attr
     *
     * @return void
     */
    public static function addField(string $title, string $type, string $field, $value, array $attr = []): void
    {
        switch($type){
            case 'editor':
            {
                self::editor($title, $field, $value, $attr);
            }
        }
    }

    protected static function editor(string $title, string $field, string $value, array $attr): void
    {
        addAction(Controller::FOOTER_SCRIPT, '\PersiLiao\Discuz\AdminCp\Form::ueditorScript');
        showtablerow('', [
            'class="td25"',
            'class="td28"'
        ], [
            getCpLang($title)
        ]);
        showtablerow('', [
            'class="td25"',
            'class="td28"'
        ], [
            sprintf('<script id="%1$s-container" name="%1$s" type="text/plain">%2$s</script>', $field, $value)
        ]);
        addAction(Controller::FOOTER_SCRIPT, function() use ($field, $attr){
            ?>
            <script>
                var ue<?php echo $field;?> = UE.getEditor('<?php echo $field;?>-container', <?php echo json_encode([
                    'initialFrameWidth' => $attr['width'],
                    'initialFrameHeight' => $attr['height'],
                    'serverUrl' => $attr['api']
                ])?>);
            </script>
            <?php
        });
    }

    public static function ueditorScript()
    {
        static $have_editor;
        if($have_editor === true){
            return;
        }
        $have_editor = true;
        ?>
        <script type="text/javascript" src="vendor/persiliao/discuz/assets/plugins/ueditor/ueditor.config.js"></script>
        <script type="text/javascript" src="vendor/persiliao/discuz/assets/plugins/ueditor/ueditor.all.js"></script>
        <?php
    }

}
