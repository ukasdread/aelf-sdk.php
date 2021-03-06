<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: types.proto

namespace AElf\Protobuf\Generated;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>AElf.protobuf.generated.CandidateVote</code>
 */
class CandidateVote extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .AElf.protobuf.generated.Hash obtained_active_voting_record_ids = 1;</code>
     */
    private $obtained_active_voting_record_ids;
    /**
     * Generated from protobuf field <code>repeated .AElf.protobuf.generated.Hash obtained_withdrawn_voting_record_ids = 2;</code>
     */
    private $obtained_withdrawn_voting_record_ids;
    /**
     * Generated from protobuf field <code>sint64 obtained_active_voted_votes_amount = 3;</code>
     */
    protected $obtained_active_voted_votes_amount = 0;
    /**
     * Generated from protobuf field <code>sint64 all_obtained_voted_votes_amount = 4;</code>
     */
    protected $all_obtained_voted_votes_amount = 0;
    /**
     * Generated from protobuf field <code>repeated .AElf.protobuf.generated.ElectionVotingRecord obtained_active_voting_records = 5;</code>
     */
    private $obtained_active_voting_records;
    /**
     * Generated from protobuf field <code>repeated .AElf.protobuf.generated.ElectionVotingRecord obtained_withdrawn_votes_records = 6;</code>
     */
    private $obtained_withdrawn_votes_records;
    /**
     * Generated from protobuf field <code>bytes public_key = 7;</code>
     */
    protected $public_key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \AElf\Protobuf\Generated\Hash[]|\Google\Protobuf\Internal\RepeatedField $obtained_active_voting_record_ids
     *     @type \AElf\Protobuf\Generated\Hash[]|\Google\Protobuf\Internal\RepeatedField $obtained_withdrawn_voting_record_ids
     *     @type int|string $obtained_active_voted_votes_amount
     *     @type int|string $all_obtained_voted_votes_amount
     *     @type \AElf\Protobuf\Generated\ElectionVotingRecord[]|\Google\Protobuf\Internal\RepeatedField $obtained_active_voting_records
     *     @type \AElf\Protobuf\Generated\ElectionVotingRecord[]|\Google\Protobuf\Internal\RepeatedField $obtained_withdrawn_votes_records
     *     @type string $public_key
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .AElf.protobuf.generated.Hash obtained_active_voting_record_ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getObtainedActiveVotingRecordIds()
    {
        return $this->obtained_active_voting_record_ids;
    }

    /**
     * Generated from protobuf field <code>repeated .AElf.protobuf.generated.Hash obtained_active_voting_record_ids = 1;</code>
     * @param \AElf\Protobuf\Generated\Hash[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setObtainedActiveVotingRecordIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \AElf\Protobuf\Generated\Hash::class);
        $this->obtained_active_voting_record_ids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .AElf.protobuf.generated.Hash obtained_withdrawn_voting_record_ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getObtainedWithdrawnVotingRecordIds()
    {
        return $this->obtained_withdrawn_voting_record_ids;
    }

    /**
     * Generated from protobuf field <code>repeated .AElf.protobuf.generated.Hash obtained_withdrawn_voting_record_ids = 2;</code>
     * @param \AElf\Protobuf\Generated\Hash[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setObtainedWithdrawnVotingRecordIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \AElf\Protobuf\Generated\Hash::class);
        $this->obtained_withdrawn_voting_record_ids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>sint64 obtained_active_voted_votes_amount = 3;</code>
     * @return int|string
     */
    public function getObtainedActiveVotedVotesAmount()
    {
        return $this->obtained_active_voted_votes_amount;
    }

    /**
     * Generated from protobuf field <code>sint64 obtained_active_voted_votes_amount = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setObtainedActiveVotedVotesAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->obtained_active_voted_votes_amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>sint64 all_obtained_voted_votes_amount = 4;</code>
     * @return int|string
     */
    public function getAllObtainedVotedVotesAmount()
    {
        return $this->all_obtained_voted_votes_amount;
    }

    /**
     * Generated from protobuf field <code>sint64 all_obtained_voted_votes_amount = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAllObtainedVotedVotesAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->all_obtained_voted_votes_amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .AElf.protobuf.generated.ElectionVotingRecord obtained_active_voting_records = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getObtainedActiveVotingRecords()
    {
        return $this->obtained_active_voting_records;
    }

    /**
     * Generated from protobuf field <code>repeated .AElf.protobuf.generated.ElectionVotingRecord obtained_active_voting_records = 5;</code>
     * @param \AElf\Protobuf\Generated\ElectionVotingRecord[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setObtainedActiveVotingRecords($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \AElf\Protobuf\Generated\ElectionVotingRecord::class);
        $this->obtained_active_voting_records = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .AElf.protobuf.generated.ElectionVotingRecord obtained_withdrawn_votes_records = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getObtainedWithdrawnVotesRecords()
    {
        return $this->obtained_withdrawn_votes_records;
    }

    /**
     * Generated from protobuf field <code>repeated .AElf.protobuf.generated.ElectionVotingRecord obtained_withdrawn_votes_records = 6;</code>
     * @param \AElf\Protobuf\Generated\ElectionVotingRecord[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setObtainedWithdrawnVotesRecords($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \AElf\Protobuf\Generated\ElectionVotingRecord::class);
        $this->obtained_withdrawn_votes_records = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes public_key = 7;</code>
     * @return string
     */
    public function getPublicKey()
    {
        return $this->public_key;
    }

    /**
     * Generated from protobuf field <code>bytes public_key = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setPublicKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->public_key = $var;

        return $this;
    }

}

