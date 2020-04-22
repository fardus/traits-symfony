<?php

namespace Fardus\Traits\Symfony\Manager;

use Symfony\Contracts\Translation\TranslatorInterface;

trait TranslatorTrait
{
    protected $translator;

    public function trans(string $id, array $parameters = [], $domain = null, $locale = null): string
    {
        return $this->translator->trans($id, $parameters, $domain, $locale);
    }

    public function getTranslator(): TranslatorInterface
    {
        return $this->translator;
    }

    /**
     * @required
     */
    public function setTranslator(TranslatorInterface $translator): self
    {
        $this->translator = $translator;

        return $this;
    }
}
