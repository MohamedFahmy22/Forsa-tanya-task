<?php
class ItemReader {
    private string $filename;
    private string $format;
    public function __construct(string $filename, string $format) {
        $this->filename = $filename;
        $this->format = $format;
    }

    /**
     * @throws InvalidFormatException
     * @throws Exception
     */
    public function readItems(): array {
        $items = [];
        switch ($this->format) {
            case 'xml':

                $content = file_get_contents($this->filename);
                    // file_get_contents($this->filename) is a PHP function that reads an entire file into a string
                $data = new SimpleXMLElement($content);
                    // convert XML code to php
                foreach ($data->children() as $element) {
                    // is a method in PHP SimpleXML library that returns an object containing all child elements of the current node.
                    $item = new Item();
                    $item->id = (string) $element->id;
                    $item->name = (string) $element->name;
                    $items[] = $item;
                }
                break;
            case 'json':
                $content = file_get_contents($this->filename);
                $data = json_decode($content);
                if ($data === null) {
                    throw new InvalidFormatException();
                }
                foreach ($data as $element) {
                    $item = new Item();
                    $item->id = $element->id;
                    $item->name = $element->name;
                    $items[] = $item;
                }
                break;
            default:
                throw new InvalidFormatException();
        }
        return $items;
    }
}
