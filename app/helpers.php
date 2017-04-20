<?php

//重写返回方法,加入类型路径
if (!function_exists('get_template_file_path')) {
    /**
     * get path for template file.
     *
     * @param string $templateName
     * @param string $templateType
     *
     * @return string
     */
    function get_template_file_path($templateName, $templateType)
    {
        $templateName = str_replace('.', '/', $templateName);

        $templatesPath = config(
            'infyom.laravel_generator.path.templates_dir',
            base_path('resources/infyom/infyom-generator-templates/')
        );

        $path = $templatesPath . $templateType . '/' . $templateName . '.stub';

        if (file_exists($path)) {
            return $path;
        }

        return base_path('vendor/infyomlabs/' . $templateType . '/templates/' . $templateName . '.stub');
    }
}