<?php

class View
{
    protected $data;

    public function assign(string $name, $value)
    {
        $this->data[$name] = $value;
        return $this;
    }

    public function render(string $template)
    {
        ob_start();
        include $template;
        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }

    public function display(string $template)
    {
        //include $template;
        echo $this->render($template);
    }
}