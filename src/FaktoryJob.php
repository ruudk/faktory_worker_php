<?php
namespace BaseKit\Faktory;

class FaktoryJob implements \JsonSerializable
{
    private $id;
    private $type;
    private $args;

    public function __construct(string $id, string $type, array $args = [])
    {
        $this->id = $id;
        $this->type = $type;
        $this->args = $args;
    }

    public function jsonSerialize()
    {
        return [
            'jid' => $this->id,
            'jobtype' => $this->type,
            'args' => $this->args,
        ];
    }
}
