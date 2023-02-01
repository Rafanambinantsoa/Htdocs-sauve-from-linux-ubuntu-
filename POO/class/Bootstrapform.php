<?php
class bootstrapform extends form
{

    //générer le paragraphe auto
    protected function surround($html)
    {
        return "<div class='form-group'>$html</div>";
    }
    public function input($name)
    {
        return  $this->surround(
            '<label>' . $name . '</label>
            <input type="text" name="' . $name . '" value="' . $this->getValue($name) . '" class="form-control">'
        );
    }
    public function submit()
    {
        return   $this->surround("<input type='button' value='envoyer' class=\"btn btn-primary\">");
    }
}
