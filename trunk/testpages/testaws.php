<?php

require 'aws/aws.phar';

use Aws\S3\S3Client;

$config = array();
$config['key'] = 'AKIAJIWOJ6L32GWAUUUQ';
$config['secret'] = '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';
$config['region'] = 'us-east-1';
$ec2Client = \Aws\Ec2\Ec2Client::factory($config);

$result = $ec2Client->DescribeInstances();