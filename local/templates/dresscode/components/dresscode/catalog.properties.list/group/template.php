<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? $this->setFrameMode(true); ?>
<? if (!empty($arResult["PUBLIC_GROUPS"]) || !empty($arResult["ANONYMOUS_PROPERTIES"])): ?>
    <div id="elementProperties">
        <div class="detailPropertiesTable">
            <div>
                <? foreach ($arResult["PUBLIC_GROUPS"] as $arGroup): ?>
                    <? if ($arGroup["NAME"] == "Общие" || $arGroup["NAME"] == "Синхронный генератор" || $arGroup["NAME"] == "Шкаф управления"): ?>
                        <?
                        $group = '';
                        if ($arGroup["NAME"] === "Дизельный двигатель") {
                            $group = $arResult["PUBLIC_GROUPS"]["Общие"]["PROPERTIES"]["2143"]["DISPLAY_VALUE"] . " " . $arResult["PUBLIC_GROUPS"]["Общие"]["PROPERTIES"]["2144"]["DISPLAY_VALUE"];
                        } else if ($arGroup["NAME"] === "Синхронный генератор") {
                            $group = $arResult["PUBLIC_GROUPS"]["Общие"]["PROPERTIES"]["2145"]["DISPLAY_VALUE"] . " " . $arResult["PUBLIC_GROUPS"]["Общие"]["PROPERTIES"]["2146"]["DISPLAY_VALUE"];
                        }
                        ?>
                        <table class="stats">
                            <tbody>
                            <? if (!empty($arGroup["NAME"]) && !empty($arGroup["PROPERTIES"])): ?>
                                <tr class="cap">
                                    <td><?= $arGroup["NAME"] == "Общие" ? "Общие характеристики" : $arGroup["NAME"] ?></td>
                                    <td><?= $group ?></td>
                                </tr>
                                <? $iteration = 1; //inc var for zebra table?>
                                <? foreach ($arGroup["PROPERTIES"] as $nextProperty): ?>
                                    <? if (!empty($nextProperty["VALUE"]) && gettype($nextProperty["VALUE"]) == "array") {
                                        $nextProperty["VALUE"] = implode(" / ", $nextProperty["VALUE"]);
                                        $nextProperty["FILTRABLE"] = false;
                                    } ?>
                                    <tr<? if ($iteration % 2): ?> class="gray"<? endif; ?>>
                                        <td class="name">
                                            <span><?= $nextProperty["NAME"] ?></span><? /* if(!empty($nextProperty["HINT"])):?><a href="#" class="question" title="<?=$nextProperty["HINT"]?>" data-description="<?=$nextProperty["HINT"]?>"></a><?endif; */ ?>
                                        </td>
                                        <td><?= $nextProperty["DISPLAY_VALUE"] ?></td>
                                        <? /* td class="right"><?if(!empty($nextProperty["FILTER_URL"])):?><a href="<?=$nextProperty["FILTER_URL"]?>" class="analog"><?=GetMessage("OTHERITEMS")?></a><?endif;?></td */ ?>
                                    </tr>
                                    <? $iteration++; ?>
                                <? endforeach; ?>
                            <? endif; ?>
                            </tbody>
                        </table>
                    <? endif; ?>
                <?$i++;?>
                <? endforeach; ?>
            </div>
            <div>
                <? foreach ($arResult["PUBLIC_GROUPS"] as $arGroup): ?>
                    <? if ($arGroup["NAME"] == "Дизельный двигатель"): ?>
                        <?
                        $group = '';
                        if ($arGroup["NAME"] === "Дизельный двигатель") {
                            $group = $arResult["PUBLIC_GROUPS"]["Общие"]["PROPERTIES"]["2143"]["DISPLAY_VALUE"] . " " . $arResult["PUBLIC_GROUPS"]["Общие"]["PROPERTIES"]["2144"]["DISPLAY_VALUE"];
                        } else if ($arGroup["NAME"] === "Синхронный генератор") {
                            $group = $arResult["PUBLIC_GROUPS"]["Общие"]["PROPERTIES"]["2145"]["DISPLAY_VALUE"] . " " . $arResult["PUBLIC_GROUPS"]["Общие"]["PROPERTIES"]["2146"]["DISPLAY_VALUE"];
                        }
                        ?>
                        <table class="stats">
                            <tbody>
                            <? if (!empty($arGroup["NAME"]) && !empty($arGroup["PROPERTIES"])): ?>
                                <tr class="cap">
                                    <td><?= $arGroup["NAME"] == "Общие" ? "Общие характеристики" : $arGroup["NAME"] ?></td>
                                    <td><?= $group ?></td>
                                </tr>
                                <? $iteration = 1; //inc var for zebra table?>
                                <? foreach ($arGroup["PROPERTIES"] as $nextProperty): ?>
                                    <? if (!empty($nextProperty["VALUE"]) && gettype($nextProperty["VALUE"]) == "array") {
                                        $nextProperty["VALUE"] = implode(" / ", $nextProperty["VALUE"]);
                                        $nextProperty["FILTRABLE"] = false;
                                    } ?>
                                    <tr<? if ($iteration % 2): ?> class="gray"<? endif; ?>>
                                        <td class="name">
                                            <span><?= $nextProperty["NAME"] ?></span><? /* if(!empty($nextProperty["HINT"])):?><a href="#" class="question" title="<?=$nextProperty["HINT"]?>" data-description="<?=$nextProperty["HINT"]?>"></a><?endif; */ ?>
                                        </td>
                                        <td><?= $nextProperty["DISPLAY_VALUE"] ?></td>
                                        <? /* td class="right"><?if(!empty($nextProperty["FILTER_URL"])):?><a href="<?=$nextProperty["FILTER_URL"]?>" class="analog"><?=GetMessage("OTHERITEMS")?></a><?endif;?></td */ ?>
                                    </tr>
                                    <? $iteration++; ?>
                                <? endforeach; ?>
                            <? endif; ?>
                            </tbody>
                        </table>
                    <? endif; ?>
                    <?$i++;?>
                <? endforeach; ?>
            </div>
            <? if (!empty($arResult["ANONYMOUS_PROPERTIES"])): ?>
                <? $iteration = 1; //inc var for zebra table?>
                <tr class="cap">
                    <td><?= GetMessage("CHARACTERISTICS") ?></td>
                </tr>
                <? foreach ($arResult["ANONYMOUS_PROPERTIES"] as $nextProperty): ?>
                    <tr<? if ($iteration % 2): ?> class="gray"<? endif; ?>>
                        <td class="name">
                            <span><?= $nextProperty["NAME"] ?></span><? if (!empty($nextProperty["HINT"])): ?><a
                                href="#" class="question" title="<?= $nextProperty["HINT"] ?>"
                                data-description="<?= $nextProperty["HINT"] ?>"></a><? endif; ?></td>
                        <td><?= $nextProperty["DISPLAY_VALUE"] ?></td>
                        <td class="right">
                            <? if (!empty($nextProperty["FILTER_URL"])): ?>
                                <a href="<?= $nextProperty["FILTER_URL"] ?>"
                                   class="analog"><?= GetMessage("OTHERITEMS") ?></a>
                            <? endif; ?>
                        </td>
                    </tr>
                    <? $iteration++ ?>
                <? endforeach; ?>
            <? endif; ?>
        </div>
    </div>
<? endif; ?>