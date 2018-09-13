<?php


namespace Training\Config\Model\Config;


use Magento\Framework\Config\ConverterInterface;

class Converter implements ConverterInterface
{
    /**
     * @inheritdoc
     */
    public function convert($source)
    {
        $xpath = new \DOMXPath($source);
        $output = [];

        $output["id"] = $this->getValue($xpath, "/my_custom_config/id");
        $output["type"] = $this->getValue($xpath, "/my_custom_config/type");
        $output["name"] = $this->getValue($xpath, "/my_custom_config/name");
        $output["description"] = $this->getValue($xpath, "/my_custom_config/description");

        return $output;
    }

    protected function getValue(\DOMXPath $domXPath, $xPath)
    {
        foreach ($domXPath->query($xPath . "/text()") as $node) {
            return (string) $node->nodeValue;
        }

        return null;
    }
}