<?php

namespace CustomCategoryWidget\Widgets;

use Ceres\Widgets\Helper\BaseWidget;

class CustomCategoryWidget extends BaseWidget
{
    protected $template = "CustomCategoryWidget::Widgets.CustomCategoryWidget";
    protected function getTemplateData($widgetSettings, $isPreview);
}

?>
