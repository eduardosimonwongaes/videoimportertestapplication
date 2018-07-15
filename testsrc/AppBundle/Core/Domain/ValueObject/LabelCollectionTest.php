<?php

namespace AppBundle\Core\Domain\ValueObject;

use PHPUnit\Framework\TestCase;

class LabelCollectionTest extends TestCase
{
    public function testThatCreatingALabelCollectionDoesNotAlterItsContent()
    {
        $arrayOfLabels =  ["one",'nice',"compensation","package"];
        $implodedeArrayOfLabels = "one,nice,compensation,package";
        $fakeLabelCollection = LabelCollection::create();

        foreach($arrayOfLabels as $label){
            $fakeLabelCollection->add(
                Label::create($label)
            );
        }

        $this->assertInstanceOf(LabelCollection::class,$fakeLabelCollection);
        $this->assertEquals($implodedeArrayOfLabels, $fakeLabelCollection->asCommaSepparatedString());


    }
}
