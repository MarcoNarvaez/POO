class Card extends Payment() {
    constructor(id, bank, expireDate, cvv) {
        super(id)
        this.bank = bank
        this.expireDate = expireDate
        this.cvv = cvv
    }
}