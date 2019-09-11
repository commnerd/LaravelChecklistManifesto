<?php

namespace Checklists;

interface Checklist {
    public function getId();
    public function getType();
    public function getLine();
}
