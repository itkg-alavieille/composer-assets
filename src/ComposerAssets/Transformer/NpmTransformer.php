<?php

namespace Alav\ComposerAssets\Transformer;

use Alav\ComposerAssets\AssetPackages\AssetPackagesInterface;

/**
 * Class NpmTransformer
 */
class NpmTransformer implements TransformerInterface
{
    const VERSION = "1.0.0";
    const DESCRIPTION = "This file is auto-generated. Do not change it";
    const LICENCE = "UNLICENSED";

    /**
     * @param AssetPackagesInterface $assetPackages
     *
     * @return array
     */
    public function transform(AssetPackagesInterface $assetPackages)
    {
        $json = array();
        $json["name"] = AssetPackagesInterface::NAME_ASSETS;
        $json["description"] = self::DESCRIPTION;
        $json["version"] = self::VERSION;
        $json["private"] = true;
        $json["license"] = self::LICENCE;
        $json["dependencies"] = $assetPackages->getAssets();

        return $json;
    }
}
