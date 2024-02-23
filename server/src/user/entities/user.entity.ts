import { Column, Entity, PrimaryGeneratedColumn } from "typeorm";

@Entity({name: 'User'})
export class User {
   @PrimaryGeneratedColumn()
    id: bigint;

    @Column({unique: true})
    email: string

    @Column()
    Password: string;

    @Column({default: 'user'})
    Role: string;
}
