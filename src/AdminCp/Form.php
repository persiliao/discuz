<?php

declare(strict_types=1);

namespace PersiLiao\Discuz\AdminCp;

use function PersiLiao\Discuz\getCpLang;
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
    public static function addField(string $type, string $field, $value, array $attr = []): void
    {
        switch($type){
            case 'editor':
            {
                self::editor($field, $value, $attr);
            }
        }
    }

    protected static function editor(string $field, string $value, array $attr): void
    {
        showtablerow('', [
            'class="td25"',
            'class="td28"'
        ], [
            sprintf(' <textarea class="userData" name="%s" id="uchome-ttHtmlEditor" %s>%s</textarea>', $field, 'style="height: 100%; width: 100%; display: none; border: 0"', $value)
        ]);
        showtablerow('', [
            'class="td25"',
            'class="td28"'
        ], [
            sprintf(' <iframe src="/home.php?mod=editor&charset=%s&allowhtml=1&isportal=0" name="uchome-ifrHtmlEditor" id="uchome-ifrHtmlEditor" scrolling="no" style="width:700px;height:400px;border:1px solid #C5C5C5;position:relative;" border=0 frameborder=0 ></iframe>', CHARSET),
        ]);
    }

    public static function addSubmit(string $field, string $value = 'submit', bool $haveEditor = false)
    {
        $onClick = 'onClick="adminCpSaveEditor(this);"';
        showtablerow('', [
            'class="td25"',
            'class="td28"'
        ], [
            sprintf('<input id="submit_editsubmit" class="btn" type="submit" name="%s" value="%s" %s/>', $field, getCpLang($value), $haveEditor ? $onClick : '')
        ]);
    }

    public static function getOnClickSubmit()
    {
        ?>
        <script>
            function adminCpSaveEditor(obj){
                edit_save();
                window.onbeforeunload = null;
                obj.form.submit();
                return false;
            }
        </script>
        <?php
    }

}
