<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gsuite/V1/api.proto

namespace GPBMetadata\Gsuite\V1;

class Api
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ace170a136773756974652f56312f6170692e70726f746f120967737569" .
            "74652e76311a1f676f6f676c652f70726f746f6275662f74696d65737461" .
            "6d702e70726f746f22f1020a144372656174654163636f756e7452657175" .
            "65737412120a0a706172746e65725f6964180120012809120e0a06646f6d" .
            "61696e18022001280912420a0c6f7267616e697a6174696f6e1803200128" .
            "0b322c2e6773756974652e76312e4372656174654163636f756e74526571" .
            "756573742e4f7267616e697a6174696f6e12320a04757365721804200128" .
            "0b32242e6773756974652e76312e4372656174654163636f756e74526571" .
            "756573742e557365721a4c0a0c4f7267616e697a6174696f6e12190a116f" .
            "7267616e697a6174696f6e5f6e616d6518012001280912140a0c636f756e" .
            "7472795f636f6465180220012809120b0a037a69701803200128091a6f0a" .
            "045573657212100a08757365726e616d6518012001280912120a0a666972" .
            "73745f6e616d6518022001280912110a096c6173745f6e616d6518032001" .
            "280912170a0f616c7465726e6174655f656d61696c18042001280912150a" .
            "0d70617373776f72645f6861736818052001280922300a15437265617465" .
            "4163636f756e74526573706f6e736512170a0f70726f766973696f6e696e" .
            "675f6964180120012809223e0a234765744163636f756e7450726f766973" .
            "696f6e696e675374617475735265717565737412170a0f70726f76697369" .
            "6f6e696e675f696418012001280922c5010a11446f6d61696e496e666f72" .
            "6d6174696f6e12160a0e646e735f7478745f7265636f7264180120012809" .
            "12330a0673746174757318022001280e32232e6773756974652e76312e44" .
            "6f6d61696e566572696669636174696f6e53746174757312300a0c637265" .
            "617465645f6461746518032001280b321a2e676f6f676c652e70726f746f" .
            "6275662e54696d657374616d7012310a0d76657269666965645f64617465" .
            "18042001280b321a2e676f6f676c652e70726f746f6275662e54696d6573" .
            "74616d7022ba010a244765744163636f756e7450726f766973696f6e696e" .
            "67537461747573526573706f6e736512130a0b627573696e6573735f6964" .
            "18012001280912120a0a70726f647563745f6964180220012809120e0a06" .
            "646f6d61696e18032001280912210a0673746174757318042001280e3211" .
            "2e6773756974652e76312e537461747573120e0a06726561736f6e180520" .
            "01280912260a1e646f6d61696e5f766572696669636174696f6e5f747874" .
            "5f7265636f7264180620012809222e0a1c476574446f6d61696e41766169" .
            "6c6162696c69747952657175657374120e0a06646f6d61696e1801200128" .
            "0922250a13566572696679446f6d61696e52657175657374120e0a06646f" .
            "6d61696e180120012809225f0a14566572696679446f6d61696e52657370" .
            "6f6e736512470a1a646f6d61696e5f766572696669636174696f6e5f7374" .
            "6174757318012001280e32232e6773756974652e76312e446f6d61696e56" .
            "6572696669636174696f6e537461747573222d0a1b476574446f6d61696e" .
            "496e666f726d6174696f6e52657175657374120e0a06646f6d61696e1801" .
            "2001280922580a1c476574446f6d61696e496e666f726d6174696f6e5265" .
            "73706f6e736512380a12646f6d61696e5f696e666f726d6174696f6e1801" .
            "2001280b321c2e6773756974652e76312e446f6d61696e496e666f726d61" .
            "74696f6e22510a124368616e676553656174735265717565737412130a0b" .
            "637573746f6d65725f696418012001280912170a0f737562736372697074" .
            "696f6e5f6964180220012809120d0a05736561747318032001280322360a" .
            "134368616e67655365617473526573706f6e7365121f0a05736561747318" .
            "012001280b32102e6773756974652e76312e536561747322420a184c6973" .
            "74537562736372697074696f6e7352657175657374120e0a06646f6d6169" .
            "6e18012001280912160a0e7472616e736665725f746f6b656e1802200128" .
            "0922640a194c697374537562736372697074696f6e73526573706f6e7365" .
            "122e0a0d737562736372697074696f6e7318012003280b32172e67737569" .
            "74652e76312e537562736372697074696f6e12170a0f6e6578745f706167" .
            "655f746f6b656e18022001280922630a05536561747312200a186c696365" .
            "6e7365645f6e756d6265725f6f665f7365617473180120012803121f0a17" .
            "6d6178696d756d5f6e756d6265725f6f665f736561747318022001280312" .
            "170a0f6e756d6265725f6f665f736561747318032001280322a2020a0c53" .
            "7562736372697074696f6e120e0a06736b755f696418012001280912100a" .
            "08736b755f6e616d6518022001280912170a0f737562736372697074696f" .
            "6e5f6964180320012809122a0a04706c616e18042001280b321c2e677375" .
            "6974652e76312e537562736372697074696f6e2e506c616e121f0a057365" .
            "61747318052001280b32102e6773756974652e76312e5365617473123b0a" .
            "0d7472616e736665725f696e666f18062001280b32242e6773756974652e" .
            "76312e537562736372697074696f6e2e5472616e73666572496e666f1a19" .
            "0a04506c616e12110a09706c616e5f6e616d651801200128091a320a0c54" .
            "72616e73666572496e666f12220a1a6d696e696d756d5f7472616e736665" .
            "7261626c655f73656174731801200128032a5c0a0653746174757312160a" .
            "125354415455535f554e535045434946494544100012120a0e5354415455" .
            "535f50454e44494e47100112130a0f5354415455535f434f4d504c455445" .
            "100212110a0d5354415455535f4641494c454410032a9a010a18446f6d61" .
            "696e566572696669636174696f6e537461747573122a0a26444f4d41494e" .
            "5f564552494649434154494f4e5f5354415455535f554e53504543494649" .
            "4544100012290a25444f4d41494e5f564552494649434154494f4e5f5354" .
            "415455535f554e5645524946494544100112270a23444f4d41494e5f5645" .
            "52494649434154494f4e5f5354415455535f564552494649454410023269" .
            "0a07506172746e6572125e0a114c697374537562736372697074696f6e73" .
            "12232e6773756974652e76312e4c697374537562736372697074696f6e73" .
            "526571756573741a242e6773756974652e76312e4c697374537562736372" .
            "697074696f6e73526573706f6e736532c6040a0d47537569746550617274" .
            "6e657212520a0d4372656174654163636f756e74121f2e6773756974652e" .
            "76312e4372656174654163636f756e74526571756573741a202e67737569" .
            "74652e76312e4372656174654163636f756e74526573706f6e7365127f0a" .
            "1c4765744163636f756e7450726f766973696f6e696e6753746174757312" .
            "2e2e6773756974652e76312e4765744163636f756e7450726f766973696f" .
            "6e696e67537461747573526571756573741a2f2e6773756974652e76312e" .
            "4765744163636f756e7450726f766973696f6e696e675374617475735265" .
            "73706f6e736512580a15476574446f6d61696e417661696c6162696c6974" .
            "7912272e6773756974652e76312e476574446f6d61696e417661696c6162" .
            "696c697479526571756573741a162e676f6f676c652e70726f746f627566" .
            "2e456d707479124f0a0c566572696679446f6d61696e121e2e6773756974" .
            "652e76312e566572696679446f6d61696e526571756573741a1f2e677375" .
            "6974652e76312e566572696679446f6d61696e526573706f6e736512670a" .
            "14476574446f6d61696e496e666f726d6174696f6e12262e677375697465" .
            "2e76312e476574446f6d61696e496e666f726d6174696f6e526571756573" .
            "741a272e6773756974652e76312e476574446f6d61696e496e666f726d61" .
            "74696f6e526573706f6e7365124c0a0b4368616e67655365617473121d2e" .
            "6773756974652e76312e4368616e67655365617473526571756573741a1e" .
            "2e6773756974652e76312e4368616e67655365617473526573706f6e7365" .
            "42690a20636f6d2e76656e64617374612e6773756974652e76312e67656e" .
            "657261746564420841706950726f746f5a3b6769746875622e636f6d2f76" .
            "656e64617374612f67656e6572617465642d70726f746f732d676f2f6773" .
            "756974652f56313b6773756974655f7631620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

