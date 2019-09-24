<?php

namespace Checklists\Interfaces;

interface Checklist {
    public function getId();
    public function getType();
    public function getLine();
}
