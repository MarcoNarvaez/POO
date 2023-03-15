import java.sql.Date;

class Card extends Payment {
    String bank;
    Date expireDate;
    int cvv;

    public Card(Integer id, String bank, Date expireDate, int cvv) {
        super(id);
        this.bank = bank;
        this.expireDate = expireDate;
        this.cvv = cvv;
    }
}